<?php

namespace App\Http\Controllers;

use App\Http\Requests\OtpCodeRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserSignupRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Responses\CustomResponse;
use App\Models\User;
use App\Notifications\OTPRequestNotification;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * @group User management
 *
 * APIs for managing users
 */
class   UserController extends Controller
{

    /**
     * Get all users (Just admin can do this request)
     * @authenticated
     */
    public function index()
    {

        return CustomResponse::ok(new UserCollection(User::all()));
    }

    /**
     * Get specifc user info.
     * @authenticated
     */
    public function show($user_id)
    {
        $user = User::find($user_id);

        if ($user == null) {
            return CustomResponse::notFound("User not found");
        }

        return CustomResponse::ok(new UserResource($user));
    }

    /**
     * Update user info
     * @authenticated
     */
    public function update(UpdateUserRequest $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user == null) {
            return CustomResponse::notFound("User not found");
        }

        $validData = $request->validated();

        //Image can be null 
        //Null value means user don't want a profile image
        $imageName = null;
        if (array_key_exists('profile_image', $validData)) {

            //Delete user previous profile image
            if ($user->profile_image != null) {
                Storage::disk('public')->delete('images/users/' . $user->profile_image);
            }

            //If user insert new profile image 
            if ($validData['profile_image'] != null) {
                $imageName = time() . '_' . $user->name . '.' . $validData['profile_image']->getClientOriginalExtension();
                Storage::disk('public')->put('images/users/' . $imageName, file_get_contents($validData['profile_image']));
            }
            $user->profile_image = $imageName;
        }

        if (array_key_exists('user_new_name', $validData) &&  $validData['user_new_name'] != null) {
            $user->name = $validData['user_new_name'];
        }

        $user->save();
        return CustomResponse::ok(['data' => new UserResource($user)]);
    }


    /**
     * User login 
     * 
     */
    public function login(UserLoginRequest $request)
    {

        $validData = $request->validated();

        $credentials = [
            'email' => $validData['email'],
            'password' => $validData['password'],
        ];

        if (auth()->attempt($credentials)) {

            $user = User::find(Auth::user()->user_id); 
            $user->tokens()->delete();

            $success['msg'] = "Login successed";
            $success['token'] = $user->createToken($user->role)->plainTextToken;
            $success['user'] = new UserResource($user);

            return CustomResponse::ok($success);
        }

        return CustomResponse::badRequest("Wrong email or password");
    }


    /**
     * User sign up (Create new account)
     */
    public function signup(UserSignupRequest $request)
    {

        $validData = $request->validated();

        //Image can be null 
        $imageName = null;
        if (array_key_exists('profile_image', $validData) && $validData['profile_image'] != null) {
            $imageName = time() . '_' . $validData['name'] . '.' . $validData['profile_image']->getClientOriginalExtension();
        }

        $credentials = [
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
            'role' => $validData['role'],
            'profile_image' => $imageName
        ];

        $user = User::create($credentials);
        //Save image in storage
        if ($imageName != null) {
            Storage::disk('public')->put('images/users/' . $imageName, file_get_contents($validData['profile_image']));
        }

        $success['msg'] = "Signup successed";
        $success['token'] = $user->createToken($credentials['role'])->plainTextToken;
        $success['user'] = new UserResource($user);

        return CustomResponse::created($success);
    }


    /**
     * Delete user 
     * @authenticated
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        if ($user == null) {
            return CustomResponse::notFound("User not found");
        }

        //If user has profile image , delete it first 
        if ($user->profile_image != null) {
            Storage::disk('public')->delete('images/users/' . $user->profile_image);
        }
        $user->delete();

        return CustomResponse::deleted();
    }

    /**
     * Request OTP code to reset password 
     */
    public function requestOTPCode(OtpCodeRequest $request) { 
        
        $validData = $request->validated() ; 

        $user = User::where('email' , $validData['email'])->first() ; 

        $user->notify(new OTPRequestNotification()) ;

        return CustomResponse::ok(['msg' => 'OTP code has been sent successfully ']) ; 

    }


    /**
     * Reset password
     */
    public function resetPassword(ResetPasswordRequest $request) { 
         
        $validData = $request->validated() ; 

        $result = (new Otp)->validate($validData['email'] , $validData['code']);

        if($result->status) { 
            // Update password 
            $user = User::where('email' , $validData['email'])->first() ; 
            $user->password = Hash::make($validData['new_password']) ; 
            $user->save() ; 
            return CustomResponse::ok(["msg" => "Password updated successfully"]) ; 
        }
        
        // Failed to update password (OTP expired or not valid)
        return CustomResponse::badRequest($result->message) ; 
    }
}

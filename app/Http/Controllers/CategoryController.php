<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategorytResource;
use App\Http\Responses\CustomResponse;
use App\Models\Category;
/**
 * @group Categories management
 *
 * APIs for managing categories
 */
class CategoryController extends Controller
{
    /**
     * Get all categories
     */
    public function index()
    {
        //
        return CustomResponse::ok(new CategoryCollection(Category::all())) ; 
    }


    /**
     * Create new category (Admin)
     * @authenticated
     */
    public function store(CreatCategoryRequest $request)
    {
        $validData = $request->validated() ; 

        $category = Category::create(['category_name' => $validData['category_name']]) ; 
        
        return CustomResponse::created(new CategorytResource($category)) ; 
    }

    /**
     * Get specific category info.
     */
    public function show($category_id)
    {
        $category = Category::find($category_id) ;
        if($category == null) { 
            return CustomResponse::notFound("Category not found") ;
        }
        //
        return CustomResponse::ok(new CategorytResource($category)) ;
    }


    /**
     * Update specific category info.(Admin)
     * @authenticated
     */
    public function update(UpdateCategoryRequest $request,$category_id)
    {

        $category = Category::find($category_id) ;
        if($category == null) { 
            return CustomResponse::notFound("Category not found") ;
        }

        $validData = $request->validated() ;

        if(array_key_exists('new_category_name' , $validData) && $validData['new_category_name'] != null ){
            $category['category_name'] = $validData['new_category_name'] ; 
        }
        $category->save() ; 

        return CustomResponse::ok(new CategorytResource($category)) ; 
    }

    /**
     * Delete category (Admin)
     * @authenticated
     */
    public function destroy($category_id)
    {
        $category = Category::find($category_id) ;
        if($category == null) { 
            return CustomResponse::notFound("Category not found") ;
        }
        //
        $category->delete() ; 
        return CustomResponse::deleted(); 
    }
}

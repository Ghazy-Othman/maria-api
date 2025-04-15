<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Http\Responses\CustomResponse;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @group Products management
 *
 * APIs for managing products
 */
class ProductController extends Controller
{
    /**
     * Get all products
     */
    public function index(Request $request)
    {
        // Add more filtering if needed
        $prodcuts = Product::when($request->category_id, function ($query) use ($request) {
            return $query->where("category_id", $request->category_id);
        })
            ->when($request->costFrom, function ($query) use ($request) {
                return $query->where('cost', '>=', $request->costFrom);
            })
            ->when($request->costTo, function ($query) use ($request) {
                return $query->where('cost', '<=', $request->costTo);
            })
            ->paginate(10)
            ->withQueryString();

        //
        return CustomResponse::ok(new ProductCollection(Product::all()));
    }


    /**
     * Create new product (Admin).
     * @authenticated
     */
    public function store(CreateProductRequest $request)
    {
        $validData = $request->validated();

        $fixidProductName = str_replace(" ", '_', $validData['product_name']);

        $imageName = null;
        if (array_key_exists('product_image', $validData) && $validData['product_image'] != null) {
            $imageName = time() . '_' . $fixidProductName . '.' . $validData['product_image']->getClientOriginalExtension();
        }

        if (array_key_exists('category_id', $validData) && Category::find($validData['category_id']) == null) {
            return CustomResponse::notFound("Category not found !!");
        }

        //
        $input = [
            'product_name' => $validData['product_name'],
            'cost' => $validData['cost'],
            'description' => $validData['description'],
            'discount' => array_key_exists('discount', $validData) ? $validData['discount'] : null,
            'category_id' => $validData['category_id'],
            'product_image' => $imageName
        ];

        $newProduct = Product::create($input);

        //Save image in storage
        if ($imageName != null) {
            Storage::disk('public')->put('images/products/' . $imageName, file_get_contents($validData['product_image']));
        }

        return CustomResponse::created(new ProductResource($newProduct));
    }

    /**
     * Get a specific product info .
     */
    public function show($product_id)
    {
        $product = Product::find($product_id);
        if ($product == null) {
            return CustomResponse::notFound("Product not found");
        }
        //
        return CustomResponse::ok(new ProductResource($product));
    }


    /**
     * Update specific product (Admin)
     * @authenticated
     */
    public function update(UpdateProductRequest $request, $product_id)
    {
        $product = Product::find($product_id);

        if ($product == null) {
            return CustomResponse::notFound("Product not found");
        }

        $validData = $request->validated();

        $fixidProductPreviousName = str_replace(" ", '_', $product->product_name);


        //
        if (array_key_exists('new_product_name', $validData) && $validData['new_product_name'] != null) {
            $product->product_name = $validData['new_product_name'];
        }

        if (array_key_exists('new_cost', $validData) && $validData['new_cost'] != null) {
            $product->cost = $validData['new_cost'];
        }

        if (array_key_exists('new_description', $validData) && $validData['new_description'] != null) {
            $product->description = $validData['new_description'];
        }

        if (array_key_exists('new_discount', $validData) && $validData['new_discount'] != null) {
            $product->discount = $validData['new_discount'];
        }

        if (array_key_exists('new_category_id', $validData) && $validData['new_category_id'] != null) {
            $product->category_id = $validData['new_category_id'];
        }

        $fixidProductNewName = str_replace(" ", '_', $product->product_name);


        //Image can be null 
        //Null value means the prodcut has no image
        $imageName = null;
        if (array_key_exists('new_product_image', $validData)) {

            //Delete previous product image
            if ($product->product_image != null) {
                Storage::disk('public')->delete('images/products/' . $fixidProductPreviousName);
            }
            //If new product image inserted
            if ($validData['new_product_image'] != null) {
                $imageName = time() . '_' . $fixidProductNewName . '.' . $validData['new_product_image']->getClientOriginalExtension();
                Storage::disk('public')->put('images/products/' . $imageName, file_get_contents($validData['new_product_image']));
            }
            $product->product_image = $imageName;
        }

        $product->save();

        return CustomResponse::ok(new ProductResource($product));
    }

    /**
     * Delete product (Admin)
     * @authenticated
     */
    public function destroy($product_id)
    {
        //
        $product = Product::find($product_id);
        if ($product == null) {
            return CustomResponse::notFound("Product not found");
        }
        if ($product->product_image != null) {
            Storage::disk('public')->delete('images/users/' . $product->product_image);
        }
        $product->delete();
        return CustomResponse::deleted();
    }
}

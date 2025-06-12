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
        $products = Product::when($request->category_id, function ($query) use ($request) {
            $query->where("category_id", $request->category_id);
        })
            ->when($request->costFrom, function ($query) use ($request) {
                $query->where('cost', '>=', $request->costFrom * 100);
            })
            ->when($request->costTo, function ($query) use ($request) {
                $query->where('cost', '<=', $request->costTo * 100);
            })
            ->when($request->sortBy, function ($query) use ($request) {
                $query->orderBy($request->sortBy);
            })->get();
        // ->paginate(10)
        // ->withQueryString();

        $response = [
            'products' => new ProductCollection($products),
            'categories' => Category::all()
        ];
        //
        return CustomResponse::ok($response);
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
        if (isset($validData['product_image'])) {
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
            'discount' => isset($validData['discount']) ? $validData['discount'] : null,
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

        //
        if (isset($validData['new_product_name'])) {
            $product->product_name = $validData['new_product_name'];
        }

        if (isset($validData['new_cost'])) {
            $product->cost = $validData['new_cost'];
        }

        if (isset($validData['new_description'])) {
            $product->description = $validData['new_description'];
        }

        if (isset($validData['new_discount'])) {
            $product->discount = $validData['new_discount'];
        }

        if (isset($validData['new_category_id'])) {
            $product->category_id = $validData['new_category_id'];
        }
        if (isset($validData['no_image']) && $product->product_image != null) {
            //
            Storage::disk('public')->delete('images/products/' . $product->product_image);
            $product->product_image = null;
        }

        //
        $product->save();

        //
        if (isset($validData['new_product_image'])) {

            //
            if ($product->product_image != null) {
                Storage::disk('public')->delete('images/products/' . $product->product_image);
            }

            // Create new image, save it in storage
            $fixid_product_name = str_replace(' ', '_', $product->product_name);
            $imageName = time() . '_' . $fixid_product_name . '.' . $validData['new_product_image']->getClientOriginalExtension();
            Storage::disk('public')->put('images/products/' . $imageName, file_get_contents($validData['new_product_image']));

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
            Storage::disk('public')->delete('images/prodcuts/' . $product->product_image);
        }
        $product->delete();
        return CustomResponse::deleted();
    }
}

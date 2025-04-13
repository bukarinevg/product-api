<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Filters\ProductFilter;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterParams = (new ProductFilter())->transform($request);

        $products = Product::where($filterParams)->paginate(40);

        return new ProductCollection($products);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        return new ProductResource(Product::create($request->all()));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return new ProductResource($product);
    }
}

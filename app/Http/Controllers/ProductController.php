<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    public function create()
    {

    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        Product::create($data);
        return redirect()->back();
    }

    public function edit(Product $product)
    {

    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return redirect()->back();

    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Provider;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', compact(['products' => Product::all()]));
    }

    public function create()
    {
        return view('admin.product.create', compact([
            'categories' => Category::all(),
            'providers' => Provider::all(),
        ]));
    }

    public function store(StoreRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.show', compact([
            'product'=> $product,
            'categories' => Category::all(),
            'providers' => Provider::all(),
        ]));
    }

    public function update(UpdateRequest $request, Product $product)
    {
         Product::update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

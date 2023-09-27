<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('themeOne::product.index', compact('products'));
    }

    public function create()
    {
        return view('themeOne::product.create');
    }

    public function store(Request $request)
    {

    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('themeOne::product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        dd($request->all());
        $product->update($request->all());
        return redirect()->route('product.index');
    }
}

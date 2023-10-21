<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $product->load('variants');

        $variants = $product->variants;

        $predefinedVariants = [];
        if ($product?->category?->predefinedVariants) {
            $predefinedVariants = $product->category->predefinedVariants->map(function ($variant) use ($variants) {

                $matched = $variants->where('name', $variant->name)->first();

                if ($matched) {

                    $variant->price = $matched->price;
                }

                return $variant;
            });
        }
        return view('themeOne::product.edit', compact('product', 'categories', 'predefinedVariants'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:products,name,' . $product->id . ',id',
            'description' => 'nullable|string',
            'account_id' => 'nullable|exists:accounts,id',
            'category_id' => 'nullable|exists:categories,id',
            'slug' => 'nullable|string|unique:products,slug',
            'type' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assuming image upload
            'price' => 'nullable|numeric|min:0',
            'is_show_in_menu' => 'nullable|boolean',
        ]);

        if ($request->has('cropped_image')) {
            $validated['image'] = $request->file('cropped_image')->store('images');
        }

        $product->update($validated);

        return redirect()->route('product.index');
    }
}

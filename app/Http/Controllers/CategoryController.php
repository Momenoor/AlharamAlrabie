<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with(['variants', 'predefinedVariants'])->get();
        return view('themeOne::category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('themeOne::category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'string|unique:categories,name',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:svg|max:2048',
                'variants' => 'nullable|array',
                'variants.*.id' => 'sometimes|exists:category_variants,id',
                'variants.*.name' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'string',
                ],
                'variants.*.description' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'string',
                ],
                'variants.*.is_extra_price' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'boolean',
                ],
                'variants.*.price' => [
                    'nullable', // Allow price to be null
                    'numeric', // Price must be numeric
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants')) && $request->input('variants.*.is_extra_price') == "1";
                    }),
                ],
                'predefinedVariants' => 'nullable|array',
                'predefinedVariants.*.id' => 'sometimes|exists:predefined_product_variants,id',
                'predefinedVariants.*.name' => 'required_if:predefinedVariants,*|string',
            ]
        );

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images');
        }

        $category = Category::query()->create($validated);

        if ($request->has('variants')) {
            $category->variants()->createMany($request->get('variants'));
        }
        if ($request->has('predefinedVariants')) {
            $category->predefinedVariants()->createMany($request->get('predefinedVariants'));
        }
        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = $category->load(['variants', 'predefinedVariants']);
        return view('themeOne::category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate(
            [
                'name' => 'string|unique:categories,name,' . $category->id,
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:svg|max:2048',
                'variants' => 'nullable|array',
                'variants.*.id' => 'sometimes|exists:category_variants,id',
                'variants.*.name' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'string',
                ],
                'variants.*.description' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'string',
                ],
                'variants.*.is_extra_price' => [
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants'));
                    }),
                    'boolean',
                ],
                'variants.*.price' => [
                    'nullable', // Allow price to be null
                    'numeric', // Price must be numeric
                    Rule::requiredIf(function () use ($request) {
                        return is_array($request->get('variants')) && $request->input('variants.*.is_extra_price') == "1";
                    }),
                ],
                'predefinedVariants' => 'nullable|array',
                'predefinedVariants.*.id' => 'sometimes|exists:predefined_product_variants,id',
                'predefinedVariants.*.name' => 'required_if:predefinedVariants,*|string',
            ]
        );

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images');
        }

        $category->update($validated);

        if (!$request->has('variants') && $category->variants()->count() > 0) {
            $category->variants()->delete();
        }

        elseif ($request->has('variants')) {

            $ids = array_column($request->get('variants'), 'id');
            if (count($ids) > 0) {
                $category->variants()->whereNotIn('id', $ids)->delete();
            }

            foreach ($request->get('variants') as $variantData) {
                $category->variants()->updateOrCreate(['id' => $variantData['id'] ?? null], $variantData);
            }
        }

        if (!$request->has('predefinedVariants') && $category->predefinedVariants()->count() > 0) {
            $category->predefinedVariants()->delete();
        }

        if ($request->has('predefinedVariants')) {

            $ids = array_column($request->get('predefinedVariants'), 'id');
            if (count($ids) > 0) {
                $category->predefinedVariants()->whereNotIn('id', $ids)->delete();
            }

            foreach ($request->get('predefinedVariants') as $predefinedVariantData) {
                $category->predefinedVariants()->updateOrCreate(['id' => $predefinedVariantData['id'] ?? null], $predefinedVariantData);
            }
        }

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'size' => 'nullable|string',
        'color' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads', 'public');

        // Convert image path to JSON array
        $validated['image'] = json_encode([$path]);
    } else {
        $validated['image'] = json_encode([]);
    }

    $product = Product::create($validated);

    return response()->json($product, 201);
}


    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $validated['image'] = $path;
        }

        $product->update($validated);

        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}

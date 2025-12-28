<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //GET(index) /api/products
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'data' => $products
        ], 200);
    }

    //GET(show) /api/products{id}
    public function show($id)
    {
        $products = Product::find($id);

        // Check if product NOT found
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $products
        ], 200);
    }

    //POST(store) /api/products
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'stock' => 'nullable|integer'
        ]);

        $products = Product::create($validated);

        return response()->json([
            'success' => true,
            'data' => $products
        ], 201);
    }
    //PUT(update) /api/products{id}
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'string|max:255',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'stock' => 'nullable|integer'
        ]);

        $products->update($validated);

        return response()->json([
            'success' => true,
            'data' => $products
        ], 200);
    }

    //DELETE(destroy) /api/products{id}
    public function destroy($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $products->delete();

        return response()->json([
            'message' => true,
            'message' => 'Product is deleted'
        ], 200);
    }
}

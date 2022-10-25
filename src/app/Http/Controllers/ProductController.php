<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\{JsonResponse, Request, Response};

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Product::orderBy('created_at')->paginate());
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json($product);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $cover = $request->file('cover');
        $payload = $request->except('cover');
        if($cover?->isValid() and isset($cover))
            $payload = array_merge($payload, ['cover' => $cover->store('products')]);
        
        $product = Product::create($payload);
        return response()->json($product);
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $payload = $request->validated();
        $cover = $request->file('cover');
        if($cover?->isValid() and isset($cover))
            $payload = array_merge($payload, ['cover' => $cover->store('products')]);
        
        $product->update($payload);
        return response()->json($product);
    }

    public function destroy(Product $product): Response
    {
        $product->delete();
        return response()->noContent();
    }
}

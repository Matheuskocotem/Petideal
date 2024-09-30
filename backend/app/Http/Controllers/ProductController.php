<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with('category')->get();
    }

    public function show(Request $request, $id = null)
    {
        if ($id) {
            return Product::findOrFail($id);
        }

        $query = Product::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->query('name') . '%');
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->query('category_id'));
        }

        return $query->get();
    }

    public funtion store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'categoryId' => 'required|exists:categories,id',
        ]);

        return Product::create($validated);
    }

    public function bestSelling(Request $request)
    {
        $bestSellingProducts = Product::select('products.*')
            ->join('sales', 'products.id', '=', 'sales.product_id')
            ->groupBy('products.id')
            ->orderByRaw('SUM(sales.quantity) DESC')
            ->limit(10) 
            ->get();

        return response()->json($bestSellingProducts);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $product->update($validated);
    
        return response()->json([
            'message' => 'Produto Atualizado com Sucesso!',
            'data' => $product
        ], 200);
    }
    

    public funtion destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Produto deletado com sucesso'
        ]);
    }

}

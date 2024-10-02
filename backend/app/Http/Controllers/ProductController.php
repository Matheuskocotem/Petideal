<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth');
    }

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

    public function store(Request $request)
    {

        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem criar produtos.'], 403);
        }

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
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem atualizar produtos.'], 403);
        }

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
    

    public function destroy(Product $product)
    {

        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem deletar produtos.'], 403);
        }
        
        $product->delete();
    
        return response()->json([
            'message' => 'Produto deletado com sucesso'
        ]);
    }

}

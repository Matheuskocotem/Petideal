<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Category::all();
    }

    public function show(Request $request, $id = null)
    {
        if ($id) {
            return Category::findOrFail($id);
        }

        $query = Category::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->query('name') . '%');
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem criar categorias.'], 403);
        }

        $validated = $request->validate([
            'name' => 'required'
        ]);
        $category = Category::create($validated);
    
        return response()->json([
            'message' => 'Categoria criada com sucesso!',
            'data' => $category
        ], 201);  
    }

    public function update(Request $request, Category $category)
    {
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem atualizar categorias.'], 403);
        }

        $validated = $request->validate([
            'name' => 'required'
        ]);

        $category->update($validated);
    
        return response()->json([
            'message' => 'Category updated successfully!',
            'data' => $category
        ], 200);
    }
    
    public function destroy(Category $category)
    {
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Acesso negado. Apenas administradores podem deletar categorias.'], 403);
        }
    
        $category->delete();
    
        return response()->json([
            'message' => 'Categoria deletada com sucesso'
        ]);
    }
    
}

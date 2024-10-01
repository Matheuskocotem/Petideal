<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
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
        $category->delete();
    
        return response()->json([
            'message' => 'Categoria deletada com sucesso'
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\CategoryService;
use App\Models\Category as CategoryModel;

class Category extends Controller
{

    public function createCategory(Request $request, CategoryService $categoryService)
    {
        if (CategoryModel::where('name', $request->name)->exists()) {
            return response()->json([
                'message' => 'Category already exists.',
                'status' => 'error'
            ], 400);
        }
        $category = $request->only(['name']);

        $response = $categoryService->registerCategory($category);

        return response()->json($response);
    }

    public function getCategories(CategoryService $categoryService)
    {

        $categories = $categoryService->getCategories();

        return response()->json($categories);
    }
}

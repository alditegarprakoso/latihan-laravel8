<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function showCategory(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'category' => $category->name,
            'posts' => $category->posts,
        ]);
    }
}

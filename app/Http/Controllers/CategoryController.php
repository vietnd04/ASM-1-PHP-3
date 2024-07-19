<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    public function show($id)
    {
        
        $category = Category::findOrFail($id);
        $articles = $category->articles;
        $articles = Article::where('category_id', $id)->paginate(10);
        $featuredArticles = Article::where('views', true)->take(9)->get();

        return view('user.categories.show', compact('category', 'articles', 'featuredArticles'));
    }
}

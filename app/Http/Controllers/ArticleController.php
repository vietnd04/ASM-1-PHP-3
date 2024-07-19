<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        $categories = Category::all();
        $featuredArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        return view('user.articles.index', compact('articles', 'categories', 'featuredArticles'));
    }

    public function show($id)
    {
        $article = Article::with('comments.user')->findOrFail($id);
        $categories = Category::all();
        $comments = $article->comments()->with('user')->get();
        $featuredArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        return view('user.articles.show', compact('article', 'categories', 'featuredArticles', 'comments'));
    }

    public function categoryArticles($id)
    {
        $category = Category::findOrFail($id);
        $articles = $category->articles;
        $categories = Category::all();
        return view('user.categories.show', compact('category', 'articles', 'categories'));
    }
}

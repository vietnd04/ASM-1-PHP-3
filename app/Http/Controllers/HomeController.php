<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class homeController extends Controller
{
public function index()
{
    $featuredArticles = Article::orderBy('views', 'desc')->take(6)->get();
    $latestArticles = Article::orderBy('created_at', 'desc')->take(6)->get();
    $popularArticles = Article::orderBy('views', 'desc')->take(6)->get();
    $categories = Category::all();

    return view('home', compact('featuredArticles', 'latestArticles', 'popularArticles', 'categories'));
}

}

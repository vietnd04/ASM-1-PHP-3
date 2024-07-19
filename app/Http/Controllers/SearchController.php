<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request)
    {
        $query = $request->input('q');
        $articles = Article::where('title', 'like', "%$query%")
                            ->orWhere('content', 'like', "%$query%")
                            ->paginate(9);



        $featuredArticles = Article::orderBy('created_at', 'desc')->take(5)->get(); // Tin tức nổi bật

        return view('user.articles.search', compact('articles', 'featuredArticles', 'query'));
    }
}

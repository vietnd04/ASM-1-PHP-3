<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Comment::query()->delete();

        Article::query()->delete();


        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                Article::create([
                    'title' => 'Bài viết số ' . $i . ' của ' . $category->name,
                    'content' => 'Nội dung bài viết ' . $i . ' mục ' . $category->name,
                    'views' => rand(1, 100),
                    'image' => 'tải xuống.jpg', 
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}


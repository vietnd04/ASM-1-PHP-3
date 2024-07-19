<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'content' => 'Đây là bình luận đầu tiên.',
                'user_id' => 1,  // ID của người dùng đã tồn tại trong bảng users
                'article_id' => 1, // ID của bài viết đã tồn tại trong bảng articles
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'content' => 'Bình luận thứ hai.',
                'user_id' => 2,
                'article_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];

      
        DB::table('comments')->insert($comments);
    }
}

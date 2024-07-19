<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Gọi các seeder khác
        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class,
            UserSeeder::class,
            CommentSeeder::class,
        ]);
    }
}

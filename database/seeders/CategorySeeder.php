<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        
        Category::create(['name' => 'Thời sự']);
        Category::create(['name' => 'Kinh doanh']);
        Category::create(['name' => 'Giải trí']);
        Category::create(['name' => 'Thể thao']);
        Category::create(['name' => 'Sức khỏe']);
    }
}

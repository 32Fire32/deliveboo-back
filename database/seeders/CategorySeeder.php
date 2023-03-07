<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $categories = [
            'Americano', // 1 
            'Asiatico', // 2
            'Healthy', // 3
            'Indiano', // 4
            'Italiano', // 5
            'Mediterraneo', // 6
            'Messicano', // 7
            'Poke', // 8
            'Fast food', // 9
            'Sushi', // 10
            'Dolci' // 11
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name);
            $newCategory->save();
        }
    }
}

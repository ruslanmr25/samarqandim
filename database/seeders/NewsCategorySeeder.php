<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "about life",
            "about science",
            "about nothing"
        ];

        foreach ($categories as $category) {
            NewsCategory::create([
                'category' => $category
            ]);
        }
    }
}

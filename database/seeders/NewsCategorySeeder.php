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
            "common",
            "scientific_activity",
            "international_relations",
            "cultural_and_educational_activity",
            "financial_activity",
            "top",
            // 'faculty_of_mathematics',
            // 'institute_of_biochemistry',
            // 'faculty_of_geography_and_ecology',
            // 'faculty_of_psychology_and_social_work',
            // 'faculty_of_history',
            // 'faculty_of_philology',
            // 'faculty_of_law',
            // 'faculty_of_pedagogy',
            // 'faculty_of_human_resource_management',
            // 'faculty_of_international_education_programs',
            // 'distance_education_department',
            // 'faculty_of_digital_technologies',
            // 'institute_of_engineering_physics',
            // 'institute_of_agrobiotechnologies_and_food_safety',
            // 'graduate_center',
        ];

        foreach ($categories as $category) {
            NewsCategory::create([
                'category' => $category
            ]);
        }
    }
}

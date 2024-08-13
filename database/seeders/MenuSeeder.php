<?php

namespace Database\Seeders;

use App\Models\Menu;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $primaryMenu = [
            [
                "name_uz" => "Yangiliklar",
                "name_en" => "News",
                "name_ru" => "Новости",
                "name_kr" => "Янгиликлар",

                "level" => 1,
                "path" => "news",
                'priority' => 5,
            ],
            [
                "name_uz" => "Tuzilma",

                "name_en" => "Structure",
                "name_ru" => "Состав",
                "name_kr" => "Тузилма",
                "level" => 1,
                "path" => "structure",
                'priority' => 1,

            ],
            [
                "name_uz" => "Ilmiy faoliyat",
                "name_en" => "Scientific activity",
                "name_ru" => "Научная деятельность",
                "name_kr" => "Илмий фаолият",
                "level" => 1,
                "path" => "scientific-activity",
                'priority' => 2,
            ],
            [
                "name_uz" => "Xalqaro aloqalar",
                "name_en" => "International relations",
                "name_ru" => "Международные отношения",
                "name_kr" => "Халқаро алоқалар",
                "level" => 1,
                "path" => "international-relations",
                'priority' => 3,
            ],
            [
                "name_uz" => "Madaniy-ma’rifiy faoliyat",
                "name_en" => "Cultural and educational activity",
                "name_ru" => "Культурно-просветительская деятельность",
                "name_kr" => "Маданий-маърифий фаолият",
                "level" => 1,
                "path" => "cultural-and-educational-activity",
                'priority' => 5,
            ],
            [
                "name_uz" => "Moliyaviy faoliyat",
                "name_en" => "Financial activity",
                "name_ru" => "Финансовая деятельность",
                "name_kr" => "Молиявий фаолият",
                "level" => 1,
                "path" => "financial-activity",
                'priority' => 4,
            ],
            [
                "name_uz" => "Root",
                "name_en" => "Root",
                "name_ru" => "Root",
                "name_kr" => "Root",
                "level" => 1,
                "path" => "visible-link",
                'priority' => 6,
            ],
        ];


        // foreach ($primaryMenu as $pr) {
        //     Menu::create($pr);
        // }
        // Menu::factory(20)->create();


        // $secondaryMenus = Menu::where("level", 2);
        // $thirdMenus = Menu::where('level', 3);


        // $secondaryMenus->update(['parent_id' => 2]);
        // $thirdMenus->update(['parent_id' => $secondaryMenus->first()->id]);
    }
}

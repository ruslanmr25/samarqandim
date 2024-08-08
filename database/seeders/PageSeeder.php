<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $thirdMenus = Menu::where("level", 3)->get();

        // foreach ($thirdMenus as $thirdMenu) {
        //     $page = Page::factory()->create();
        //     $page->update(['menu_id' => $thirdMenu->id]);
        // }
    }
}

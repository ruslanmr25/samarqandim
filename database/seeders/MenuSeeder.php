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
        Menu::factory(20)->create();
        $primaryMenu = Menu::where('level', 1)->first();

        $secondaryMenus = Menu::where("level", 2);
        $thirdMenus = Menu::where('level', 3);


        $secondaryMenus->update(['parent_id' => $primaryMenu->id]);
        $thirdMenus->update(['parent_id' => $secondaryMenus->first()->id]);
    }
}

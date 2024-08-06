<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'news',
            'page',
            'menu',
            'slide',
            'user',
            'file.upload', 'file.delete',
        ];

        foreach ($permissions as $permission) {

            Permission::create([
                'permission' => $permission
            ]);
        }


        $categories = NewsCategory::all();

        foreach ($categories as $category) {

            Permission::create([
                'permission' => 'news.' . $categories->category
            ]);
        }
        $permissions = Permission::all()->pluck('id');



        User::find(1)->permissions()->syncWithoutDetaching($permissions);
    }
}

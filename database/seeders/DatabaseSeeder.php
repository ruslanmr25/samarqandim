<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $suparAdmin = User::create([
            'username' => 'superAdmin',
            'fullname' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make(123456789)

        ]);


        User::create([
            'username' => 'ruslan',
            'fullname' => 'Mamasalayev Ruslan',
            'email' => 'ruslanmamasalayev@gmail.com',
            'password' => Hash::make(123456789)
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            NewsCategorySeeder::class,
            MenuSeeder::class,
            PageSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            NewsSeeder::class,
        ]);
    }
}

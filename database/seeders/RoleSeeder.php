<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $role = Role::create(
            ['role' => "superAdmin"]
        );


        User::find(1)->roles()->attach($role->id);
    }
}

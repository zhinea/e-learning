<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'title' => 'Admin',
                'icon' => 'slack',
                'color' => 'primary'
            ],
            [
                'title' => 'User',
                'icon' => 'user',
                'color' => 'warning'
            ]
        ];


        Role::insert($roles);

    }
}

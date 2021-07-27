<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Zidna Fadla',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Bambank',
                'email' => 'bambank@mail.com',
                'password' => bcrypt('password'),
            ]
        ];

        User::insert($users);
    }
}

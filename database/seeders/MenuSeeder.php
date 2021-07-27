<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $menus = [
            [
                'title' => 'Forums',
                'icon' => 'message-square',
                'link' => '/forums'
            ]
        ];


        foreach ($menus as $menu) {
            \App\Models\Menu::create($menu);
        }
    }
}

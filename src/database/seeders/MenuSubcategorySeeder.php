<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuSubcategory;

class MenuSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuSubcategory::create([
            'name' => '定食類',
            'menu_category_id' => 1,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => '冷たい麺類',
            'menu_category_id' => 1,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => '温かい麺類',
            'menu_category_id' => 1,
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => '一品料理',
            'menu_category_id' => 2,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => '揚物',
            'menu_category_id' => 2,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => '焼物',
            'menu_category_id' => 2,
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => 'お酒',
            'menu_category_id' => 3,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => 'ジュース',
            'menu_category_id' => 3,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuSubcategory::create([
            'name' => 'アイス',
            'menu_category_id' => 4,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'menu_subcategory_id' => 1,
            'name' => 'そば定食',
            'description' => '1番人気のお得なセットメニューです。手打ちそば.古代米入りごはん.そばどうふ.季節の小鉢.漬物.デザート',
            'price' => 1500,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 1,
            'name' => '天ぷら定食（そば定食＋山菜天ぷら）',
            'description' => '「そば定食」に採れたての山菜の天ぷらが付いた自慢のセットです',
            'price' => 1950,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 1,
            'name' => '甲州ワインビーフ牛丼',
            'description' => '',
            'price' => 1100,
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 2,
            'name' => '山菜おろしそば',
            'description' => '',
            'price' => 1200,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 2,
            'name' => 'もりそば',
            'description' => '',
            'price' => 800,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 2,
            'name' => 'とろろそば',
            'description' => '',
            'price' => 850,
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 3,
            'name' => '天ぷらそば',
            'description' => '',
            'price' => 1200,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 3,
            'name' => '山菜おろしうどん',
            'description' => '',
            'price' => 1100,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 3,
            'name' => '天ぷらうどん',
            'description' => '',
            'price' => 1100,
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 4,
            'name' => '山菜天ぷら盛り合わせ',
            'description' => '',
            'price' => 970,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 4,
            'name' => '甲州名物とりもつ',
            'description' => '',
            'price' => 550,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 5,
            'name' => 'フライドポテト',
            'description' => '',
            'price' => 420,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 5,
            'name' => 'とりの唐揚（サラダ付）',
            'description' => '',
            'price' => 600,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 6,
            'name' => 'ネギ間２本(ﾀﾚ又は塩)',
            'description' => '',
            'price' => 270,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 6,
            'name' => 'つくね２本(ﾀﾚ又は塩)',
            'description' => '',
            'price' => 270,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 7,
            'name' => '生ビール（中）',
            'description' => '',
            'price' => 550,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 7,
            'name' => '角ハイボール',
            'description' => '',
            'price' => 400,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 8,
            'name' => 'ウーロン茶',
            'description' => '',
            'price' => 200,
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        Menu::create([
            'menu_subcategory_id' => 8,
            'name' => 'コカコーラ',
            'description' => '',
            'price' => 250,
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);
    }
}

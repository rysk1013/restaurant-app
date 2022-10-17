<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuCategory;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCategory::create([
            'name' =>'お食事',
            'turn' => 1,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuCategory::create([
            'name' =>'一品料理',
            'turn' => 2,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuCategory::create([
            'name' =>'お飲み物',
            'turn' => 3,
            'create_user' => 1,
            'update_user' => null,
        ]);

        MenuCategory::create([
            'name' =>'デザート',
            'turn' => 4,
            'create_user' => 1,
            'update_user' => null,
        ]);
    }
}

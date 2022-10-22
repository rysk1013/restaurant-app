<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EarningsDetails;

class EarningsDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EarningsDetails::create([
            'earnings_id' => 1,
            'menu_id' => 7,
            'menu_name' => '天ぷらそば',
            'order_price' => 12000,
            'order_num' => 10,
        ]);

        EarningsDetails::create([
            'earnings_id' => 1,
            'menu_id' => 16,
            'menu_name' => '生ビール（中）',
            'order_price' => 3300,
            'order_num' => 6,
        ]);

        EarningsDetails::create([
            'earnings_id' => 1,
            'menu_id' => 5,
            'menu_name' => 'もりそば',
            'order_price' => 6400,
            'order_num' => 8,
        ]);

        EarningsDetails::create([
            'earnings_id' => 1,
            'menu_id' => 12,
            'menu_name' => 'フライドポテト',
            'order_price' => 1260,
            'order_num' => 3,
        ]);

        EarningsDetails::create([
            'earnings_id' => 2,
            'menu_id' => 25,
            'menu_name' => 'オレンジジュース',
            'order_price' => 1500,
            'order_num' => 5,
        ]);

        EarningsDetails::create([
            'earnings_id' => 2,
            'menu_id' => 4,
            'menu_name' => '山菜おろしそば',
            'order_price' => 24000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 2,
            'menu_id' => 11,
            'menu_name' => '甲州名物とりもつ',
            'order_price' => 7150,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 3,
            'menu_id' => 19,
            'menu_name' => 'コカコーラ',
            'order_price' => 6000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 3,
            'menu_id' => 10,
            'menu_name' => '天ぷら盛り合わせ',
            'order_price' => 12600,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 3,
            'menu_id' => 1,
            'menu_name' => 'そば定食',
            'order_price' => 48000,
            'order_num' => 32,
        ]);

        EarningsDetails::create([
            'earnings_id' => 4,
            'menu_id' => 7,
            'menu_name' => '天ぷらそば',
            'order_price' => 12000,
            'order_num' => 10,
        ]);

        EarningsDetails::create([
            'earnings_id' => 4,
            'menu_id' => 16,
            'menu_name' => '生ビール（中）',
            'order_price' => 3300,
            'order_num' => 6,
        ]);

        EarningsDetails::create([
            'earnings_id' => 4,
            'menu_id' => 5,
            'menu_name' => 'もりそば',
            'order_price' => 6400,
            'order_num' => 8,
        ]);

        EarningsDetails::create([
            'earnings_id' => 4,
            'menu_id' => 12,
            'menu_name' => 'フライドポテト',
            'order_price' => 1260,
            'order_num' => 3,
        ]);

        EarningsDetails::create([
            'earnings_id' => 5,
            'menu_id' => 25,
            'menu_name' => 'オレンジジュース',
            'order_price' => 1500,
            'order_num' => 5,
        ]);

        EarningsDetails::create([
            'earnings_id' => 5,
            'menu_id' => 4,
            'menu_name' => '山菜おろしそば',
            'order_price' => 24000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 5,
            'menu_id' => 11,
            'menu_name' => '甲州名物とりもつ',
            'order_price' => 7150,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 6,
            'menu_id' => 19,
            'menu_name' => 'コカコーラ',
            'order_price' => 6000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 6,
            'menu_id' => 10,
            'menu_name' => '山菜天ぷら盛り合わせ',
            'order_price' => 12600,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 6,
            'menu_id' => 1,
            'menu_name' => 'そば定食',
            'order_price' => 48000,
            'order_num' => 32,
        ]);

        EarningsDetails::create([
            'earnings_id' => 7,
            'menu_id' => 7,
            'menu_name' => '天ぷらそば',
            'order_price' => 12000,
            'order_num' => 10,
        ]);

        EarningsDetails::create([
            'earnings_id' => 7,
            'menu_id' => 16,
            'menu_name' => '生ビール（中）',
            'order_price' => 3300,
            'order_num' => 6,
        ]);

        EarningsDetails::create([
            'earnings_id' => 7,
            'menu_id' => 5,
            'menu_name' => 'もりそば',
            'order_price' => 6400,
            'order_num' => 8,
        ]);

        EarningsDetails::create([
            'earnings_id' => 7,
            'menu_id' => 12,
            'menu_name' => 'フライドポテト',
            'order_price' => 1260,
            'order_num' => 3,
        ]);

        EarningsDetails::create([
            'earnings_id' => 8,
            'menu_id' => 25,
            'menu_name' => 'オレンジジュース',
            'order_price' => 1500,
            'order_num' => 5,
        ]);

        EarningsDetails::create([
            'earnings_id' => 8,
            'menu_id' => 4,
            'menu_name' => '山菜おろしそば',
            'order_price' => 24000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 8,
            'menu_id' => 11,
            'menu_name' => '甲州名物とりもつ',
            'order_price' => 7150,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 9,
            'menu_id' => 19,
            'menu_name' => 'コカコーラ',
            'order_price' => 6000,
            'order_num' => 20,
        ]);

        EarningsDetails::create([
            'earnings_id' => 9,
            'menu_id' => 10,
            'menu_name' => '山菜天ぷら盛り合わせ',
            'order_price' => 12600,
            'order_num' => 13,
        ]);

        EarningsDetails::create([
            'earnings_id' => 9,
            'menu_id' => 1,
            'menu_name' => 'そば定食',
            'order_price' => 48000,
            'order_num' => 32,
        ]);

        EarningsDetails::create([
            'earnings_id' => 10,
            'menu_id' => 7,
            'menu_name' => '天ぷらそば',
            'order_price' => 12000,
            'order_num' => 10,
        ]);

        EarningsDetails::create([
            'earnings_id' => 10,
            'menu_id' => 16,
            'menu_name' => '生ビール（中）',
            'order_price' => 3300,
            'order_num' => 6,
        ]);

        EarningsDetails::create([
            'earnings_id' => 10,
            'menu_id' => 5,
            'menu_name' => 'もりそば',
            'order_price' => 6400,
            'order_num' => 8,
        ]);

        EarningsDetails::create([
            'earnings_id' => 10,
            'menu_id' => 12,
            'menu_name' => 'フライドポテト',
            'order_price' => 1260,
            'order_num' => 3,
        ]);
    }
}

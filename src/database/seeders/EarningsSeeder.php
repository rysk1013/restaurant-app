<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Earnings;

class EarningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Earnings::create([
            'date' => '2022-10-01',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-10-02',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-10-03',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-09-04',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-09-05',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-09-06',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-08-07',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-08-08',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-08-09',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-07-10',
            'create_user' => 1,
        ]);

        Earnings::create([
            'date' => '2022-07-11',
            'create_user' => 1,
        ]);
    }
}

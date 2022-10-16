<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => '山田太郎',
            'email' => 'test@example.com',
            'password' => '$2y$10$CN08XEkEfZnbBGS.HnuFjepbRx80gN2C9VKA0oYAjYF4US9Cg9mam',
        ]);
    }
}

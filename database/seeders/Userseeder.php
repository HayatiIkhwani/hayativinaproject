<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class userseeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "HayatiLaravel",
            'email' => 'HayatiLaravel@HayatiLaravel.com',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
			]);
    }
}
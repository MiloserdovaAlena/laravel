<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Импортируем класс Hash
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            "name"=> "moderator",
            "email"=> "moderator@mail.ru",
            "password"=> Hash::make("123456"),
            "role_id"=> 1,
        ]);
        User::create([
            "name"=> "reader",
            "email"=> "reader@mail.ru",
            "password"=> Hash::make("123456"),
            "role_id"=> 2,
        ]);
    }
}
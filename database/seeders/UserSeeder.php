<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Nizam',
            'level' => 'admin',
            'email' => 'sigitkhoirunnizam10@gmail.com',
            'password' => bcrypt('qwerty123'),
            'remember_token' => Str::random(60),
        ]);
    }
}

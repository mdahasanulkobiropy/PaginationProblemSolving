<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'A',
            'email' => 'a@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'B',
            'email' => 'b@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'C',
            'email' => 'c@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'D',
            'email' => 'd@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'E',
            'email' => 'e@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'F',
            'email' => 'f@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'G',
            'email' => 'g@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'H',
            'email' => 'h@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'I',
            'email' => 'i@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'J',
            'email' => 'j@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'K',
            'email' => 'k@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'L',
            'email' => 'l@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'M',
            'email' => 'm@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'N',
            'email' => 'n@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'O',
            'email' => 'o@gmail.com',
            'password' => '1234',
        ]);
       
    }
}

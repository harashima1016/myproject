<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // オーナー
    \App\User::create([
        'name' => 'オーナー太郎',
        'email' => 'owner@example.com',
        'password' => bcrypt('xxxxxxxx'),
        'role' => 'owner'
    ]);

    // お客さん
    \App\User::create([
        'name' => 'お客花子',
        'email' => 'customer@example.com',
        'password' => bcrypt('xxxxxxxx'),
        'role' => 'customer'
    ]);

    }
}

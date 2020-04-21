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
        DB::table('users')->insert([
            'name'              => 'ルカリオ',
            'email'             => 'user@example.com',
            'password'          => Hash::make(12341234),
            'remember_token'    => Str::random(10),
        ]);
    }
}
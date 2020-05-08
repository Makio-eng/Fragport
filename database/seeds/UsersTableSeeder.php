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
      [
        'name'              => 'ルカリオ',
        'email'             => 'user@example.com',
        'password'          => Hash::make('jfjfjfjf'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'ポッチャマ',
        'email'             => 'po@example.com',
        'password'          => Hash::make('kdkdkdkd'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'マタドガス',
        'email'             => 'ma@example.com',
        'password'          => Hash::make('lslslsls'),
        'remember_token'    => Str::random(10),
      ],

    ]);
  }
}

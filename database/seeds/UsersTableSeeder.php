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
      [
        'name'              => 'test1',
        'email'             => 'test1@example.com',
        'password'          => Hash::make('qEzWHnqHPL'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test2',
        'email'             => 'test2@example.com',
        'password'          => Hash::make('KtwE3RA5Qr'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test3',
        'email'             => 'test3@example.com',
        'password'          => Hash::make('HQZrYjBtNc'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test4',
        'email'             => 'test4@example.com',
        'password'          => Hash::make('6F5BViMqaN'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test5',
        'email'             => 'test5@example.com',
        'password'          => Hash::make('zeUwE62c7z'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test6',
        'email'             => 'test6@example.com',
        'password'          => Hash::make('afyKisScZV'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test7',
        'email'             => 'test7@example.com',
        'password'          => Hash::make('aKEhXUvy8f'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test8',
        'email'             => 'test8@example.com',
        'password'          => Hash::make('b36WbtNXC8'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => 'test9',
        'email'             => 'test9@example.com',
        'password'          => Hash::make('iYdSU4yNDk'),
        'remember_token'    => Str::random(10),
      ],

    ]);
  }
}

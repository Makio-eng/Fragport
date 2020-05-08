<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('admins')->insert([
      [
        'name'              => '春日',
        'email'             => 'admin@example.com',
        'password'          => Hash::make('jfjfjfjf'),
        'remember_token'    => Str::random(10),
      ],
      [
        'name'              => '友坂',
        'email'             => 'tomo@example.com',
        'password'          => Hash::make('tomotomo'),
        'remember_token'    => Str::random(10),
      ]
    ]);
  }
}

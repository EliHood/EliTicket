<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Eli2',
            'email' => 'eli.hoodd@gmail.com',
            'password' => Hash::make('janemba'),
        ]);
    }
}

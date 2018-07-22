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
            'name' => 'EliHood',
            'is_admin' => 1,
            'email' => 'level1mediamarketing@gmail.com',
            'password' => Hash::make('janemba'),
        ]);
    }
}

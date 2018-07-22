<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // set yourself as an admin

         DB::table('users')->insert([
            'name' => '',
            'type' => 'admin',
            'email' => '',
            'password' => Hash::make(''),
        ]);
    }
}

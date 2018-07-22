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
         DB::table('users')->insert([
            'name' => 'EliHood',
            'type' => 'admin',
            'email' => 'eli.hood@aol.com',
            'password' => Hash::make('janemba'),
        ]);
    }
}

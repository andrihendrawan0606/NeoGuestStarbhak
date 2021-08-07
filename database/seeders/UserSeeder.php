<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'violetevergarden@gmail.com',
            'password' => Hash::make('violet'),
            'level' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'petugas',
            'email' => 'sakazuki@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'petugas',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('tamu')->insert([
            'name' => 'tamu',
            'email' => 'tamu@gmail.com',
            'password' => Hash::make('tamu'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}

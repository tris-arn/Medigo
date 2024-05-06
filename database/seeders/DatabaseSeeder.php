<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
        "name"=>"Gladys",
        "email"=>"gladys@ruslim.com",
        "password"=>"123asb"
        ]);
        User::create([
        "name"=>"Shamgar",
        "email"=>"shamgar@eugene.com",
        "password"=>"123cde"
        ]);
        
    }
}

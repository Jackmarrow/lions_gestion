<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PhotoClasse;
use App\Models\Studio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        RoleSeeder::class,
        UserSeeder::class,
        UserRoleSeeder::class,
        ClasseSeeder::class,
        StudioSeeder::class,
       ]);
    }
}

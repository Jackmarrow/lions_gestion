<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name'=>'Mehdi',
            // 'type'=>'user interne',
            'email'=>'admin@admin.com',
            'password'=>'adminadmin',
        ]);
    }
}

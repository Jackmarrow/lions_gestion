<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studio::insert([
            [
                'name'=>'studio_1'
            ],
            [
                'name'=>'studio_2'
            ],
            [
                'name'=>'espace cafe'
            ],
            [
                'name'=>'espace agora'
            ],
            [
                'name'=>'co-working'
            ],
            [
                'name'=>'externe'
            ]
        ]);
    }
}

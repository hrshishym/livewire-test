<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StarSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Star::create();
        \App\Models\Star::create();
        \App\Models\Star::create();
    }
}

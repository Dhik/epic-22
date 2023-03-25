<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([JudgeSeeder::class]);
        $this->call([FinalistSeeder::class]);
        $this->call([SponsorshipSeeder::class]);
    }
}

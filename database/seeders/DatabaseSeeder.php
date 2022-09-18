<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            AdminSeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            EmploymentSeeder::class,
            FeatureSeeder::class,
            IndustrySeeder::class,
            OccupationSeeder::class,
            PrefectureSeeder::class,
            UserSeeder::class,
        ]);
    }
}

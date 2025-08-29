<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $countries = [
            ['name' => 'Pakistan', 'status' => 'active'],
            ['name' => 'India', 'status' => 'active'],
            ['name' => 'USA', 'status' => 'active'],
            ['name' => 'Canada', 'status' => 'active'],
            ['name' => 'UK', 'status' => 'active'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}

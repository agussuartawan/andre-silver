<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'Basic',
            'min_price' => 600000,
            'max_price' => 1000000,
            'description' => 'Basic package',
        ]);

        Package::create([
            'name' => 'Intermediate',
            'min_price' => 1000000,
            'max_price' => 1500000,
            'description' => 'Intermediate package',
        ]);

        Package::create([
            'name' => 'VIP',
            'min_price' => 1500000,
            'max_price' => 2000000,
            'description' => 'VIP package',
        ]);
    }
}
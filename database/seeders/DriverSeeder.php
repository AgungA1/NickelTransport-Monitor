<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = [
            'Budi Santoso',
            'Siti Rahayu',
            'Ahmad Hidayat',
            'Dewi Susanti',
            'Hendra Wijaya',
            'Rina Fitriani',
            'Eko Prasetyo',
            'Linda Sari',
            'Rudi Hartono',
            'Anita Permata',
            'Hadi Nugroho',
            'Rita Wulandari',
            'Yusuf Setiawan',
            'Dina Puspita',
            'Wahyu Kusuma',
        ];

        foreach ($drivers as $driver) {
            Driver::create([
                'driver_name' => $driver,
            ]);
        }
    }
}

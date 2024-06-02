<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            [
                'driver_id' => 1,
                'vehicle_id' => 1,
                'status' => 'approved1',
                'order_date' => '2021-01-01',
                'end_date' => '2021-01-02',
            ],
            [
                'driver_id' => 2,
                'vehicle_id' => 2,
                'status' => 'pending',
                'order_date' => '2021-01-03',
                'end_date' => '2021-01-04',
            ],
            [
                'driver_id' => 3,
                'vehicle_id' => 3,
                'status' => 'approved2',
                'order_date' => '2021-01-05',
                'end_date' => '2021-01-06',
            ],
            [
                'driver_id' => 4,
                'vehicle_id' => 4,
                'status' => 'rejected',
                'order_date' => '2021-01-07',
                'end_date' => '2021-01-08',
            ],
            [
                'driver_id' => 5,
                'vehicle_id' => 5,
                'status' => 'completed',
                'order_date' => '2021-01-09',
                'end_date' => '2021-01-10',
            ],
            [
                'driver_id' => 6,
                'vehicle_id' => 6,
                'status' => 'pending',
                'order_date' => '2021-01-11',
                'end_date' => '2021-01-12',
            ],
            [
                'driver_id' => 6,
                'vehicle_id' => 7,
                'status' => 'approved1',
                'order_date' => '2021-01-13',
                'end_date' => '2021-01-14',
            ],
            [
                'driver_id' => 8,
                'vehicle_id' => 8,
                'status' => 'approved2',
                'order_date' => '2021-01-15',
                'end_date' => '2021-01-16',
            ],
            [
                'driver_id' => 8,
                'vehicle_id' => 9,
                'status' => 'pending',
                'order_date' => '2021-01-17',
                'end_date' => '2021-01-18',
            ],
            [
                'driver_id' => 10,
                'vehicle_id' => 10,
                'status' => 'completed',
                'order_date' => '2021-01-19',
                'end_date' => '2021-01-20',
            ],
        ];

        foreach ($order as $value) {
            Order::create([
                'driver_id' => $value['driver_id'],
                'vehicle_id' => $value['vehicle_id'],
                'status' => $value['status'],
                'order_date' => $value['order_date'],
                'end_date' => $value['end_date'],
            ]);
        };
    }
}

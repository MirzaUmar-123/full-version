<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipment;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipments = [
            [
                'order_id' => 1,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'UPS',
                'status' => 'shipped',
                'shipped_at' => Carbon::now()->subDays(2),
                'delivered_at' => null,
            ],
            [
                'order_id' => 2,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'FedEx',
                'status' => 'delivered',
                'shipped_at' => Carbon::now()->subDays(5),
                'delivered_at' => Carbon::now()->subDays(1),
            ],
            [
                'order_id' => 3,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'DHL',
                'status' => 'shipped',
                'shipped_at' => Carbon::now()->subDays(1),
                'delivered_at' => null,
            ],
            [
                'order_id' => 4,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'UPS',
                'status' => 'delivered',
                'shipped_at' => Carbon::now()->subDays(7),
                'delivered_at' => Carbon::now()->subDays(3),
            ],
            [
                'order_id' => 5,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'FedEx',
                'status' => 'pending',
                'shipped_at' => null,
                'delivered_at' => null,
            ],
            [
                'order_id' => 6,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'DHL',
                'status' => 'shipped',
                'shipped_at' => Carbon::now()->subDays(3),
                'delivered_at' => null,
            ],
            [
                'order_id' => 7,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'UPS',
                'status' => 'delivered',
                'shipped_at' => Carbon::now()->subDays(4),
                'delivered_at' => Carbon::now()->subDays(1),
            ],
            [
                'order_id' => 8,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'FedEx',
                'status' => 'shipped',
                'shipped_at' => Carbon::now()->subDays(2),
                'delivered_at' => null,
            ],
            [
                'order_id' => 9,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'DHL',
                'status' => 'delivered',
                'shipped_at' => Carbon::now()->subDays(6),
                'delivered_at' => Carbon::now()->subDays(2),
            ],
            [
                'order_id' => 10,
                'tracking_number' => 'TRK-' . Str::upper(Str::random(10)),
                'carrier' => 'UPS',
                'status' => 'pending',
                'shipped_at' => null,
                'delivered_at' => null,
            ],
        ];

        foreach ($shipments as $shipment) {
            Shipment::create($shipment);
        }
    }
}

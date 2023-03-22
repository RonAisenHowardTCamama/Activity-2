<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            [
                'venue_name' => 'Madison Square Garden',
                'city' => 'New York',
                'state' => 'NY',
                'zip' => '10001',
                'phone' => '555-1234',
            ],
            [
                'venue_name' => 'Staples Center',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'zip' => '90015',
                'phone' => '555-5678',
            ],
            [
                'venue_name' => 'United Center',
                'city' => 'Chicago',
                'state' => 'IL',
                'zip' => '60612',
                'phone' => '555-9876',
            ],
            [
                'venue_name' => 'Air Canada Centre',
                'city' => 'Toronto',
                'state' => 'ON',
                'zip' => 'M5J 2X2',
                'phone' => '555-4321',
            ],
            [
                'venue_name' => 'AT&T Center',
                'city' => 'San Antonio',
                'state' => 'TX',
                'zip' => '78219',
                'phone' => '555-8765',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'venue_id' => 1,
                'organizer_id' => 1,
                'event_name' => 'Concert',
                'event_date' => '2023-04-01',
                'start_time' => '19:00:00',
                'end_time' => '22:00:00',
                'description' => 'A great concert with popular artists',
            ],
            [
                'venue_id' => 2,
                'organizer_id' => 2,
                'event_name' => 'Basketball Game',
                'event_date' => '2023-04-05',
                'start_time' => '20:00:00',
                'end_time' => '22:00:00',
                'description' => 'NBA game between the Lakers and the Warriors',
            ],
            [
                'venue_id' => 3,
                'organizer_id' => 3,
                'event_name' => 'Theatre Play',
                'event_date' => '2023-04-10',
                'start_time' => '19:30:00',
                'end_time' => '21:30:00',
                'description' => 'A classic play by Shakespeare',
            ],
            [
                'venue_id' => 4,
                'organizer_id' => 4,
                'event_name' => 'Comedy Show',
                'event_date' => '2023-04-15',
                'start_time' => '21:00:00',
                'end_time' => '23:00:00',
                'description' => 'Stand-up comedy with famous comedians',
            ],
            [
                'venue_id' => 5,
                'organizer_id' => 5,
                'event_name' => 'Conference',
                'event_date' => '2023-04-20',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'description' => 'A technology conference with keynote speakers',
            ],
        ]);
    }
}

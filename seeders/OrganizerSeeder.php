<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizers')->insert([
            [
                'username' => 'johndoe',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@gmail.com',
                'phone' => '555-1234',
            ],
            [
                'username' => 'janedoe',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'janedoe@gmail.com',
                'phone' => '555-5678',
            ],
            [
                'username' => 'bobsmith',
                'first_name' => 'Bob',
                'last_name' => 'Smith',
                'email' => 'bobsmith@gmail.com',
                'phone' => '555-9876',
            ],
            [
                'username' => 'alicejones',
                'first_name' => 'Alice',
                'last_name' => 'Jones',
                'email' => 'alicejones@gmail.com',
                'phone' => '555-4321',
            ],
            [
                'username' => 'samwilson',
                'first_name' => 'Sam',
                'last_name' => 'Wilson',
                'email' => 'samwilson@gmail.com',
                'phone' => '555-8765',
            ],
        ]);
    }
}

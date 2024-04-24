<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            ['id' => 1, 'Straat' => 'Van Gilslaan', 'Huisnummer' => '34', 'Postcode' => '1045CB', 'Stad' => 'Hilvarenbeek'],
            ['id' => 2, 'Straat' => 'Den Dolderpad', 'Huisnummer' => '2', 'Postcode' => '1067RC', 'Stad' => 'Utrecht'],
            ['id' => 3, 'Straat' => 'Fredo Raalteweg', 'Huisnummer' => '257', 'Postcode' => '1236OP', 'Stad' => 'Nijmegen'],
            ['id' => 4, 'Straat' => 'Bertrand Russellhof', 'Huisnummer' => '21', 'Postcode' => '2034AP', 'Stad' => 'Den Haag'],
            ['id' => 5, 'Straat' => 'Leon van Bonstraat', 'Huisnummer' => '213', 'Postcode' => '145XC', 'Stad' => 'Lunteren'],
            ['id' => 6, 'Straat' => 'Bea van Lingenlaan', 'Huisnummer' => '234', 'Postcode' => '2197FG', 'Stad' => 'Sint Pancras'],
        ];

        foreach ($contacts as $contact) {
            DB::table('Contacts')->updateOrInsert(['id' => $contact['id']], $contact);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergenen = [
            [ 'Naam' => 'Gluten', 'Omschrijving' => 'Dit product bevat gluten'],
            [ 'Naam' => 'Gelatine', 'Omschrijving' => 'Dit product bevat gelatine'],
            [ 'Naam' => 'AZO-Kleurstof', 'Omschrijving' => 'Dit product bevat AZO-kleurstoffen'],
            [ 'Naam' => 'Lactose', 'Omschrijving' => 'Dit product bevat lactose'],
            [ 'Naam' => 'Soja', 'Omschrijving' => 'Dit product bevat soja'],
        ];

        foreach ($allergenen as $allergeen) {
            DB::table('allergenen')->insert($allergeen);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerAllergeenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productPerAllergeen = [
            ['ProductId' => 1, 'AllergeenId' => 2],
            ['ProductId' => 1, 'AllergeenId' => 1],
            ['ProductId' => 1, 'AllergeenId' => 3],
            ['ProductId' => 3, 'AllergeenId' => 4],
            ['ProductId' => 6, 'AllergeenId' => 5],
            ['ProductId' => 9, 'AllergeenId' => 2],
            ['ProductId' => 9, 'AllergeenId' => 5],
            ['ProductId' => 10, 'AllergeenId' => 2],
            ['ProductId' => 12, 'AllergeenId' => 4],
            ['ProductId' => 13, 'AllergeenId' => 1],
            ['ProductId' => 13, 'AllergeenId' => 4],
            ['ProductId' => 13, 'AllergeenId' => 5],
            ['ProductId' => 14, 'AllergeenId' => 5],
        ];

        foreach ($productPerAllergeen as $item) {
            DB::table('ProductPerAllergeen')->insert($item);
        }
    }
}
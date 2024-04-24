<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagzijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $magzijns = [
            ['products_id' => 1, 'verpakkingsEenheid' => '5', 'aantalAanwezig' => 453],
            ['products_id' => 2, 'verpakkingsEenheid' => '2,5', 'aantalAanwezig' => 400],
            ['products_id' => 3, 'verpakkingsEenheid' => '5', 'aantalAanwezig' => 1],
            ['products_id' => 4, 'verpakkingsEenheid' => '1', 'aantalAanwezig' => 800],
            ['products_id' => 5, 'verpakkingsEenheid' => '3', 'aantalAanwezig' => 234],
            ['products_id' => 6, 'verpakkingsEenheid' => '2', 'aantalAanwezig' => 345],
            ['products_id' => 7, 'verpakkingsEenheid' => '1', 'aantalAanwezig' => 795],
            ['products_id' => 8, 'verpakkingsEenheid' => '10', 'aantalAanwezig' => 233],
            ['products_id' => 9, 'verpakkingsEenheid' => '2,5', 'aantalAanwezig' => 123],
            ['products_id' => 10, 'verpakkingsEenheid' => '3', 'aantalAanwezig' => null],
            ['products_id' => 11, 'verpakkingsEenheid' => '2', 'aantalAanwezig' => 367],
            ['products_id' => 12, 'verpakkingsEenheid' => '1', 'aantalAanwezig' => 467],
            ['products_id' => 13, 'verpakkingsEenheid' => '5', 'aantalAanwezig' => 20],
        ];

        foreach ($magzijns as $item) {
            DB::table('magzijn')->insert($item);
        }
    }
}

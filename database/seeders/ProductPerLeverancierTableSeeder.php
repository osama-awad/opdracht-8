<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerLeverancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProductPerLeveranciers  = [
            ['id' => 1, 'leveranciers_id' => 1, 'products_id' => 1, 'datumlevering' => '2023-04-09', 'aantal' => 23, 'datumEerstvolgendelevering' => '2023-04-16'],
            ['id' => 2, 'leveranciers_id' => 1, 'products_id' => 2, 'datumlevering' => '2023-04-18', 'aantal' => 21, 'datumEerstvolgendelevering' => '2023-04-17'],
            ['id' => 3, 'leveranciers_id' => 1, 'products_id' => 3, 'datumlevering' => '2023-04-19', 'aantal' => 12, 'datumEerstvolgendelevering' => '2023-04-21'],
            ['id' => 4, 'leveranciers_id' => 1, 'products_id' => 4, 'datumlevering' => '2023-04-10', 'aantal' => 11, 'datumEerstvolgendelevering' => '2023-04-28'],
            ['id' => 5, 'leveranciers_id' => 2, 'products_id' => 1, 'datumlevering' => '2023-04-14', 'aantal' => 16, 'datumEerstvolgendelevering' => '2023-04-21'],
            ['id' => 6, 'leveranciers_id' => 2, 'products_id' => 4, 'datumlevering' => '2023-04-21', 'aantal' => 23, 'datumEerstvolgendelevering' => '2023-04-21'],
            ['id' => 7, 'leveranciers_id' => 2, 'products_id' => 5, 'datumlevering' => '2023-04-14', 'aantal' => 45, 'datumEerstvolgendelevering' => '2023-04-19'],
            ['id' => 8, 'leveranciers_id' => 2, 'products_id' => 6, 'datumlevering' => '2023-04-14', 'aantal' => 30, 'datumEerstvolgendelevering' => '2023-04-26'],
            ['id' => 9, 'leveranciers_id' => 3, 'products_id' => 7, 'datumlevering' => '2023-04-12', 'aantal' => 12, 'datumEerstvolgendelevering' => '2023-04-17'],
            ['id' => 10, 'leveranciers_id' =>3, 'products_id' => 7, 'datumlevering' => '2023-04-12', 'aantal' => 23, 'datumEerstvolgendelevering' => '2023-04-18'],
            ['id' => 11, 'leveranciers_id' => 3, 'products_id' => 8, 'datumlevering' => '2023-04-19', 'aantal' => 12, 'datumEerstvolgendelevering' => '2023-04-30'],
            ['id' => 12, 'leveranciers_id' => 3, 'products_id' => 9, 'datumlevering' => '2023-04-10', 'aantal' => 1, 'datumEerstvolgendelevering' => '2023-04-17'],
            ['id' => 13, 'leveranciers_id' => 4, 'products_id' =>10, 'datumlevering' => '2023-04-11', 'aantal' => 24, 'datumEerstvolgendelevering' => '2023-04-17'],
            ['id' => 14, 'leveranciers_id' => 5, 'products_id' => 11, 'datumlevering' => '2023-04-16', 'aantal' => 47, 'datumEerstvolgendelevering' => '2023-04-26'],
            ['id' => 15, 'leveranciers_id' => 5, 'products_id' => 12, 'datumlevering' => '2023-04-11', 'aantal' => 60, 'datumEerstvolgendelevering' => null],
            ['id' => 16, 'leveranciers_id' => 5, 'products_id' => 12, 'datumlevering' => '2023-04-12', 'aantal' => 23, 'datumEerstvolgendelevering' => null],
            ['id' => 17, 'leveranciers_id' => 7, 'products_id' => 14, 'datumlevering' => '2023-04-14', 'aantal' => 20, 'datumEerstvolgendelevering' => null],
        ];

        foreach ($ProductPerLeveranciers as $item) {
            DB::table('ProductPerLeverancier')->insert($item); // Changed 'ProductPerLeveranciers' to 'ProductPerLeverancier'
        }
    }
}
// public function run(): void
// {
//     $products = [
//         ['id' => 1, 'Naam' => 'Mintnopjes', 'Barcode' => '8719587231278'],
//         ['id' => 2, 'Naam' => 'Schoolkrijt', 'Barcode' => '8719587326713'],
//         ['id' => 3, 'Naam' => 'Honingdrop', 'Barcode' => '8719587327836'],
//         ['id' => 4, 'Naam' => 'Zure Beren', 'Barcode' => '8719587321441'],
//         ['id' => 5, 'Naam' => 'Cola Flesjes', 'Barcode' => '8719587321237'],
//         ['id' => 6, 'Naam' => 'Turtles', 'Barcode' => '8719587322245'],
//         ['id' => 7, 'Naam' => 'Witte Muizen', 'Barcode' => '8719587328256'],
//         ['id' => 8, 'Naam' => 'Reuzen Slangen', 'Barcode' => '8719587325641'],
//         ['id' => 9, 'Naam' => 'Zoute Rijen', 'Barcode' => '8719587322739'],
//         ['id' => 10, 'Naam' => 'Winegums', 'Barcode' => '8719587327527'],
//         ['id' => 11, 'Naam' => 'Drop Munten', 'Barcode' => '8719587322345'],
//         ['id' => 12, 'Naam' => 'Kruis Drop', 'Barcode' => '8719587322265'],
//         ['id' => 13, 'Naam' => 'Zoute Ruitjes', 'Barcode' => '8719587323256'],
//         ['id' => 14, 'Naam' => 'Drop ninja}~{P:ASDHIU::>M<<?}{POIUYTREW"!%^&*(()_+s', 'Barcode' => '8719587323277'],
//     ];

//     foreach ($products as $product) {
//         DB::table('products')->updateOrInsert(['id' => $product['id']], $product);
    
// }
// }
// }
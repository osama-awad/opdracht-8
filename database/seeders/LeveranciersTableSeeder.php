<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeveranciersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leveranciers = [

            [ 'name' => 'Venco', 'contact_person' => 'Bert van Linge', 'supplier_number' => 'L1029384719', 'mobile' => '06-28493827', 'contacts_id' => 1],
            [ 'name' => 'Astra Sweets', 'contact_person' => 'Jasper del Monte', 'supplier_number' => 'L1029284315', 'mobile' => '06-39398734', 'contacts_id' => 2],
            [ 'name' => 'Haribo', 'contact_person' => 'Sven Stalman', 'supplier_number' => 'L1029324748', 'mobile' => '06-24383291', 'contacts_id' => 3],
            [ 'name' => 'Basset', 'contact_person' => 'Joyce Stelterberg', 'supplier_number' => 'L1023845773', 'mobile' => '06-48293823', 'contacts_id' => 4],
            [ 'name' => 'De Bron', 'contact_person' => 'Remco Veenstra', 'supplier_number' => 'L1023857736', 'mobile' => '06-34291234', 'contacts_id' => 5],
            [ 'name' => 'Quality Street', 'contact_person' => 'Johan Nooij', 'supplier_number' => 'L1029234586', 'mobile' => '06-23458456', 'contacts_id' => 6],
            ['name' => 'Hom Ken Food', 'contact_person' => 'Hom Ken', 'supplier_number' => 'L1029234599', 'mobile' => '06-23458477', 'contacts_id' => null],
      
        ];


        foreach ($leveranciers as $item) {
            DB::table('leveranciers')->insert($item);
        }
    }
}

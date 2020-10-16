<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProducterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::insert([
            [
                'name' => 'Venus de Milo',
                'date' => '150 av. J-C',
                'origin' => 'Milos',
                'price' => '500 000 000',
                'artistname' => "Alexandros d'Antioche"
            ],
            [
                'name' => 'Discobole',
                'date' => 'Vᵉ siècle av. J.-C',
                'origin' => 'British Museum',
                'price' => '500 000 000 000',
                'artistname' => "Myron"
            ],
            [
                'name' => 'Auguste de Prima Porta',
                'date' => '20 av. J.-C.',
                'origin' => 'Prima Porta',
                'price' => '200 000 000 000',
                'artistname' => "Anonyme"
            ]

        ]);
    }
}

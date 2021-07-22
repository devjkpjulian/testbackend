<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Colgate Toothpaste',
            'description' => 'this is a product that allows you to make your teeth healthy',
            'price' => 10.01,
        ]);
    }
}

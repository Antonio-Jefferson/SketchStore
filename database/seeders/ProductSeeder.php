<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Produto 01',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 01',
                'price' => 99.00,
                'stock' => 100,
            ],
            [
                'name' => 'Produto 02',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 02',
                'price' => 49.99,
                'stock' => 50,
            ],
            [
                'name' => 'Produto 03',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 03',
                'price' => 29.99,
                'stock' => 30,
            ],
            [
                'name' => 'Produto 04',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 04',
                'price' => 19.99,
                'stock' => 20,
            ],
            [
                'name' => 'Produto 05',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 05',
                'price' => 9.99,
                'stock' => 10,
            ],
            [
                'name' => 'Produto 06',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 06',
                'price' => 99.99,
                'stock' => 5,
            ],
            [
                'name' => 'Produto 07',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 07',
                'price' => 79.99,
                'stock' => 15,
            ],
            [
                'name' => 'Produto 08',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 08',
                'price' => 59.99,
                'stock' => 25,
            ],
            [
                'name' => 'Produto 09',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 09',
                'price' => 39.99,
                'stock' => 35,
            ],
            [
                'name' => 'Produto 10',
                'image_url' => 'https://m.media-amazon.com/images/I/61QAsK+JivL._AC_SX679_.jpg',
                'description' => 'Descrição do Produto 10',
                'price' => 29.99,
                'stock' => 45,
            ],
        ]);
    }
}

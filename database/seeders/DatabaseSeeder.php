<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Product::create([
            'gambar' => 'asdasdasd',
            'nama' => 'Tempe Goreng',
            'stock' => 20,
            'harga' => 30000,
        ]);

        Product::create([
            'gambar' => 'asdasdasd',
            'nama' => 'nasi Goreng',
            'stock' => 3,
            'harga' => 15000,
        ]);
    }
}

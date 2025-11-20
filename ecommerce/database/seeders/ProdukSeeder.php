<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::create([
            'id' => 1,
            'nama' => 'Produk A',
            'harga' => 10000,
            'stok' => 50,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
                'nama_produk' => 'Sabun	Lifebuoy',
                'harga_beli' => '2000',
                'harga_jual' => '4000'
        ]);
    }
}

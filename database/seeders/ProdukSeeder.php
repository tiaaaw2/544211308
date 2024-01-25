<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan baris ini

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_produk')->insert(array(
            ['nama_produk'	=>	'Sabun	Lifebuoy',	'harga_jual'	=>	'2000',	'harga_beli'	=>	'500'],
            ['nama_produk'	=>	'Shampoo	Sunsilk',	'harga_jual'	=>	'4000',	'harga_beli'	=>	'1000']
    ));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'HP','merk'=>'Samsung', 'harga'=>5000000],
            ['nama_barang'=>'Leptop','merk'=>'Acer', 'harga'=>8000000],
            ['nama_barang'=>'Megicom','merk'=>'Philips', 'harga'=>1500000],
            ['nama_barang'=>'Oven','merk'=>'Kirin', 'harga'=>3500000],
            ['nama_barang'=>'AC','merk'=>'Polytron', 'harga'=>4000000]
        ];

        // masukkan data ke DB
        DB::table('barangs')->insert($barangs);
    }
}

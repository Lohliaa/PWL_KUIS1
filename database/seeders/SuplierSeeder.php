<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Suplier;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Suplier')->insert([
            [
            'nama' => 'PT. Trikomindo Kharis Utama ',
            'jenis' => 'MacBook Pro 13 inci',
            'gambar' => 'laptop.jpg',
            'alamat' => 'Ruko Permata Ancol Blok G no 16, Jakarta Utara, DKI Jakarta, Indonesia'
            ],
            [
                'nama' => 'PT. Bismacindo Perkasa',
                'jenis' => 'Macbook Pro MD104 Tahun 2012',
                'gambar' => 'laptop.jpg',
                'alamat' => 'Jl Raya Pesangrahan N0 1128 B Jakarta Barat 11610, Jakarta Barat, DKI Jakarta, Indonesia'
                ],
                [
                    'nama' => 'PT Inovasi Sukses Sentosa',
                    'jenis' => 'MacBook Pro 13 Inch 2018',
                    'gambar' => 'laptop.jpg',
                    'alamat' => 'Ruko Business Park Blok E2 No 8, Jl Meruya Ilir Raya No.88 Kebon Jeruk Jakarta Barat, Jakarta Barat, DKI Jakarta, Indonesia'
                    ]
        ]);
    }
}

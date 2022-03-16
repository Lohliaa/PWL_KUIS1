<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pelanggan')->insert([
            [
            'nama' => 'PT. Trikomindo Kharis Utama ',
            'gambar' => 'trikom-kharisma.png',
            'alamat' => 'Ruko Permata Ancol Blok G no 16, Jakarta Utara, DKI Jakarta, Indonesia',
            'telepon' => '(+62)2122644744'
            ],
            [
                'nama' => 'PT Alia Teknik',
                'gambar' => 'aliateknik.jpg',
                'alamat' => 'Melati Mas Blok I/10 No. 18 , Jelupang, Serpong Utara Tangerang, Banten, Kota Tangerang Selatan, Banten, Indonesia',
                'telepon' => '(+62)81811872755'    
            ],
            [
                    'nama' => 'PT Quartee Technologies',
                    'gambar' => 'QT.jpg',
                    'alamat' => 'Kompleks Taman Semanan Indah, Plaza Delumina, Blok B, No.18, Jakarta Barat, DKI Jakarta, Indonesia',
                    'telepon' => '(+62)21999820023'
            ]
        ]);
    }
}

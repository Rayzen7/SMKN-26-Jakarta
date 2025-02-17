<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Visi_MisiSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Visi_Misi::insert([
            'visi'=>'Terbentuknya Sumber Daya Manusia yang Berakhlak Mulia, Siap Kerja, Mandiri, dan Kompeten Dalam Memanfaatkan Teknologi Dengan Berwawasan Lingkungan',
            'misi'=>'
1. Meningkatkan Keimanan Dan ketaqwaan
Kepada Tuhan Yang Maha Esa Bagi Seluruh
Warga Sekolah
2. Meningkatkan Kompetensi Pendidik Dan
Tenaga Kependidikan
3. Menyelenggarakan Pendidikan Dan
Pelatihan Berbasis Kompetensi Deangan
Memanfaatkan Teknologi Informasi Dan
Komunikasi
4. Menjalin Kerjasama Dengan Dunia Usaha/
Industri Dan Masyarakat Umum
5. Memanfaatkan Pola Hidup Bersih Dan sehat
bagi seluruh warga Sekolah
6. Menanamkan Kemandirian Dan Jiwa Juang
yang Tinggi Bagi Peserta Didik Yang Optimal
            '
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SejarahSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sejarah::insert([
            'sejarah_1'=>'SMK Negeri 26 Jakarta awalnya bernama STM Negeri Pembangunan Jakarta. SMK Negeri 26 Jakarta merupakan lembaga pendidikan kejuruan yang bertugas meningkatkan Sumber Daya Manusia (SDM) yang sesuai dengan kebutuhan Industri dan Masyarakat. Pembangunan Indonesia yang dimulai pada tahun 1969-1970 yang dikenal dengan PELITA I, memberikan pemikiran untuk mengadakan pembaharuan pada sistem pendidikan nasional, khususnya pembaharuan pada Sekolah Teknologi Menengah (STM) dengan jenjang pendidikan 3-4 tahun mulai dirintis',
            'sejarah_2'=>'Pada tahun 1970-1971 Menteri Pendidikan menetapkan untuk menyelesaikan 12 instalasi Pendidikan Teknik secara bertahap. Intalasi pendidikan di Jakarta dan Semarang telah diselesaikan sekaligus sebagai proyek perintis sekolah teknologi menengah pembangunan dengan lama belajar 4 (empat) tahun yang diresmikan oleh Presiden RI, Jenderal Besar TNI (Purn.) H. M. Soeharto di Jakarta pada 1 Juli 1971 dan di Semarang pada 7 Juli 1971 disusul di Yogyakarta pada 29 Juli 1972.',
            'sejarah_3'=> 'Pada tahun 1973 selesai dibangun 5 (lima) Proyek Perintis STM Pembangunan di Surabaya, Ujung Pandang, Bandung, Pekalongan dan Temanggung. Sedangkan pada tahun 1974 selesai 4 (empat) Instalasi Pendidikan Teknik Lainnya yaitu di Jember, Boyolali, Tanggeang dan Metro, yang disebut dengan Sekolah Menengah Teknologi Pertanian dengan lama belajar 3 (tiga) tahun. Dengan demikian hanya ada 8 (delapan) Proyek Perintis STM Pembangunan di Indonesia'
        ]);
    }
}

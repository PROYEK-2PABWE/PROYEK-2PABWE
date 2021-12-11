<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beranda = [
            [
                'judulBeranda' => 'Pentingnya Menjaga Kesehatan',
                'excerptBody' => 'Kesehatan adalah kondisi kesejahteraan fisik, mental, dan sosial yang lengkap dan bukan sekadar tidak adanya penyakit..',
                'isiBeranda' => 'Kesehatan adalah kondisi kesejahteraan fisik, mental, dan sosial yang lengkap dan bukan sekadar tidak adanya penyakit atau kelemahan. Pemahaman tentang kesehatan telah bergeser seiring dengan waktu. Berkembangnya teknologi kesehatan berbasis digital telah memungkinkan setiap orang untuk mempelajari dan menilai diri mereka sendiri, dan berpartisipasi aktif dalam gerakan promosi kesehatan. Berbagai faktor sosial berpengaruh terhadap kondisi kesehatan, seperti perilaku individu, kondisi sosial, genetik dan biologi, perawatan kesehatan, dan lingkungan fisik.',
            ],
            [
                'judulBeranda' => 'Makanan Sehat',
                'excerptBody' => 'Makanan sehat adalah hal yang sangat bermanfaat untuk tubuh. Banyak manfaat yang akan didapatkan dari makan..',
                'isiBeranda' => 'Makanan sehat adalah hal yang sangat bermanfaat untuk tubuh. Banyak manfaat yang akan didapatkan dari makan makanan sehat. Selain itu, makanan sehat juga tidak sulit untuk ditemukan.',
            ],
            [
                'judulBeranda' => 'Olahraga Teratur',
                'excerptBody' => 'Makanan sehat adalah hal yang sangat bermanfaat untuk tubuh. Banyak manfaat yang akan didapatkan dari makan..',
                'isiBeranda' => 'Makanan sehat adalah hal yang sangat bermanfaat untuk tubuh. Banyak manfaat yang akan didapatkan dari makan makanan sehat. Selain itu, makanan sehat juga tidak sulit untuk ditemukan. Banyak toko-toko yang menjual makanan sehat mulai dari bahan baku sampai menu makanan.',
            ],
            [
                'judulBeranda' => 'Olahraga Tradisional',
                'excerptBody' => 'Ada banyak sekali jenis tanaman obat tradisional atau yang biasa kita sebut dengan obat herbal yang ampuh me..',
                'isiBeranda' => 'Ada banyak sekali jenis tanaman obat tradisional atau yang biasa kita sebut dengan obat herbal yang ampuh mengobati penyakit ringan hingga penyakit kelas berat. Selain itu, Tanaman obat tradisional ini juga sudah teruji mampu menghilangkan penyakit dibandingkan dengan obat-obatan yang dicampur dengan zat kimia. Untuk itu bagi Anda yang ingin menanam tanaman obat tradisional berikut kami sajikan untuk Anda.',
            ],
            [
                'judulBeranda' => 'Alat Kesehatan',
                'excerptBody' => 'Alat Kesehatan adalah peralatan yang digunakan untuk tindakan medis dalam dunia kedokteran baik itu untuk men..',
                'isiBeranda' => 'Alat Kesehatan adalah peralatan yang digunakan untuk tindakan medis dalam dunia kedokteran baik itu untuk mencegah, mendiagnosis, mengobati/menyembuhkan, meringankan, merawat serta memulihkan orang sakit atau bisa juga untuk memperbaiki fungsi tubuh manusia termasuk tindakan implan.',
            ],
            [
                'judulBeranda' => 'Alat Kosmetik',
                'excerptBody' => 'Kosmetik adalah zat perawatan yang digunakan untuk meningkatkan penampilan atau aroma tubuh manusia. Kosmetik um..',
                'isiBeranda' => 'Kosmetik adalah zat perawatan yang digunakan untuk meningkatkan penampilan atau aroma tubuh manusia. Kosmetik umumnya merupakan campuran dari beragam senyawa kimia, beberapa terbuat dari sumber-sumber alami dan kebanyakan dari bahan sintetis.[1] Perihal atau tata cara menggunakan kosmetik disebut dengan tata rias atau make up.',
            ],
        ];

        DB::table('beranda')->insert($beranda);
    }
}

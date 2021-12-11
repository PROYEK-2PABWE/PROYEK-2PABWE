<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produk = [
            //Semua
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '001',
                'nama_produk' => 'Dancow',
                'slug_produk' => 'Dancow',
                'deskripsi_produk' => 'Dancow merupakan susu yang mampu menambah pengetahuan',
                'foto' => 'public/images/produk/sudancow.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '80000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '002',
                'nama_produk' => 'Promag',
                'slug_produk' => 'Promag',
                'deskripsi_produk' => 'Promag merupakan obat yang lambungnya bermasalah',
                'foto' => 'public/images/produk/promag.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '60000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '003',
                'nama_produk' => 'Bajaka',
                'slug_produk' => 'Bajaka',
                'deskripsi_produk' => 'Bajaka merupakan obat yang dipercaya mampu menyembuhkan segala jenis penyakit',
                'foto' => 'public/images/produk/bajaka.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '100000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '004',
                'nama_produk' => 'Anmum',
                'slug_produk' => 'Anmum',
                'deskripsi_produk' => 'Anmum merupakan susu untuk ibu hamil',
                'foto' => 'public/images/produk/anmum.png',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '160000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '005',
                'nama_produk' => 'Cat Kuku',
                'slug_produk' => 'Cat Kuku',
                'deskripsi_produk' => 'Cat kuku merupakan alat mempercantik kuku dengan diberi warna',
                'foto' => 'public/images/produk/catkuku.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '30000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '006',
                'nama_produk' => 'Termometer',
                'slug_produk' => 'Termometer',
                'deskripsi_produk' => 'Termometer merupakan alat yang digunakan untuk mengukur suhu badan',
                'foto' => 'public/images/produk/alat2.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '250000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '007',
                'nama_produk' => 'Paracetamol',
                'slug_produk' => 'Paracetamol',
                'deskripsi_produk' => 'Paracetamol merupakan obat yang bisa menyembuhkan kepala orang sakit',
                'foto' => 'public/images/produk/obat1.png',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '75000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '008',
                'nama_produk' => 'Ponds',
                'slug_produk' => 'Ponds',
                'deskripsi_produk' => 'Ponds merupakan bedak wajah yang mampu mempercatik raut wajah',
                'foto' => 'public/images/produk/ponds.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '65000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '001',
                'user_id' => 1,
                'kode_produk' => '009',
                'nama_produk' => 'Kunyit',
                'slug_produk' => 'Kunyit',
                'deskripsi_produk' => 'Kunyit merupakan obat herbal yang mampu menyembuhkan penyakit dalam',
                'foto' => 'public/images/produk/kunyit.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '15000',
                'status' => 'Publish'
            ],

            //Obat
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '001',
                'nama_produk' => 'Tylenol',
                'slug_produk' => 'Tylenol',
                'deskripsi_produk' => 'Tylenol merupakan obat yang digunakan untuk mengurangi rasa sakit dan demam serta meringankan gejala alergi, selesma, sakit kepala dan influenza.',
                'foto' => 'public/images/produk/tylenol.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '45000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '002',
                'nama_produk' => 'Strepsils',
                'slug_produk' => 'Strepsils',
                'deskripsi_produk' => 'Strepsils adalah sebuah produk pelega tenggorokan untuk memulihkan ketidaknyamanan yang disebabkan oleh infeksi mulut dan tenggorokan.',
                'foto' => 'public/images/produk/strepsils.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '30000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '003',
                'nama_produk' => 'Sudafed-PE',
                'slug_produk' => 'Sudafed-PE',
                'deskripsi_produk' => 'Sudafed-PE digunakan untuk menghilangkan hidung tersumbat jangka pendek dari flu biasa, sinusitis, alergi saluran pernapasan atas, dan demam. ',
                'foto' => 'public/images/produk/sudafed.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '55000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '004',
                'nama_produk' => 'Loraclear',
                'slug_produk' => 'Loraclear',
                'deskripsi_produk' => 'Loraclear digunakan untuk menyembuhkan alergi pada tubuh ',
                'foto' => 'public/images/produk/Loraclear.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '120000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '005',
                'nama_produk' => 'Hersagi',
                'slug_produk' => 'Hersagi',
                'deskripsi_produk' => 'Hersagi secara tradisional dapat membantu meredakan nyeri yang disebabkan oleh gigi berlubang. ',
                'foto' => 'public/images/produk/terbaru0.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '90000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '002',
                'user_id' => 1,
                'kode_produk' => '006',
                'nama_produk' => 'Paracetamol',
                'slug_produk' => 'Paracetamol',
                'deskripsi_produk' => 'Paracetamol adalah obat untuk meredakan demam dan nyeri, termasuk nyeri haid atau sakit gigi. ',
                'foto' => 'public/images/produk/kategori1.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '65000',
                'status' => 'Publish'
            ],

            //Alat Kesehatan
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '001',
                'nama_produk' => 'Stetoskop',
                'slug_produk' => 'Stetoskop',
                'deskripsi_produk' => 'Stetoskop digunakan untuk mendengar suara jantung dan pernapasan, meskipun dia juga digunakan untuk mendengar intestine dan aliran darah dalam arteri dan "vein" ',
                'foto' => 'public/images/produk/alat1.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '250000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '002',
                'nama_produk' => 'Warm Water Zak',
                'slug_produk' => 'Warm Water Zak',
                'deskripsi_produk' => 'WARM WATER ZAK merupakan alat kompres yang diisi air panas yang dapat digunakan untuk menghangatkan bagian tubuh.',
                'foto' => 'public/images/produk/alat5.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '50000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '003',
                'nama_produk' => 'Spuit',
                'slug_produk' => 'Spuit',
                'deskripsi_produk' => 'Spuit adalah alat yang berbentuk pompa piston sederhana yang berfungsi untuk menyuntikkan cairan / gas ke dalam tubuh pasien.',
                'foto' => 'public/images/produk/alat8.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '10000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '004',
                'nama_produk' => 'Tensimeter',
                'slug_produk' => 'Tensimeter',
                'deskripsi_produk' => 'Tensimeter adalah alat kesehatan yang menunjukkan tekanan sistolik dan tekanan diastolik. ',
                'foto' => 'public/images/produk/alat3.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '300000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '005',
                'nama_produk' => 'Underarm Crutches',
                'slug_produk' => 'Underarm Crutches',
                'deskripsi_produk' => 'dikenal sebagai kruk ketiak dan merupakan jenis yang biasa diberikan kepada pasien setelah cedera tungkai bawah. ',
                'foto' => 'public/images/produk/alat7.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '250000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '003',
                'user_id' => 1,
                'kode_produk' => '006',
                'nama_produk' => 'Infuset',
                'slug_produk' => 'Infuset',
                'deskripsi_produk' => 'merupakan sebuah alat yang digunakan oleh seorang petugas medis atau perawat untuk melakukan pemasangan infus.',
                'foto' => 'public/images/produk/alat4.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '85000',
                'status' => 'Publish'
            ],

            // Obat Herbal
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '001',
                'nama_produk' => 'Akar Bajaka',
                'slug_produk' => 'Akar Bajaka',
                'deskripsi_produk' => 'Bajakah adalah salah satu tumbuhan yang dapat diolah sebagai obat alternatif untuk mengatasi kanker payudara.',
                'foto' => 'public/images/produk/bajaka.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '150000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '002',
                'nama_produk' => 'Daun Sirih',
                'slug_produk' => 'Daun Sirih',
                'deskripsi_produk' => ' Daun sirih merupakan senyawa fenolik yang memiliki sifat antioksidan, anti mutagenik, anti proliferatif, dan anti bakteri.',
                'foto' => 'public/images/produk/sirih.jpg',
                'qty' => '1',
                'satuan' => 'ikat',
                'harga' => '50000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '003',
                'nama_produk' => 'Jahe',
                'slug_produk' => 'Jahe',
                'deskripsi_produk' => 'Jahe merupakan tanaman herbal yang kerap dimanfaatkan untuk mengatasi berbagai kondisi, mulai dari mual, batuk, nyeri sendi, hingga nyeri akibat terapi kanker.',
                'foto' => 'public/images/produk/jahe.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '45000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '004',
                'nama_produk' => 'Kunyit',
                'slug_produk' => 'Kunyit',
                'deskripsi_produk' => 'Kunyit diketahui dapat mencegah penyakit jantung karena mengandung kurkumin yang mampu meningkatkan fungsi endotelium atau lapisan pembuluh darah.',
                'foto' => 'public/images/produk/kunyit.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '35000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '005',
                'nama_produk' => 'Daun Sirsak',
                'slug_produk' => 'Daun Sirsak',
                'deskripsi_produk' => 'Daun sirsak terdapat kandungan acetogenin yang bermanfaat untuk menghambat perkembangan virus yang menyerang paru-paru.',
                'foto' => 'public/images/produk/sirsak.jpg',
                'qty' => '1',
                'satuan' => 'kg',
                'harga' => '20000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '004',
                'user_id' => 1,
                'kode_produk' => '006',
                'nama_produk' => 'Daun Pepaya',
                'slug_produk' => 'Daun Pepaya',
                'deskripsi_produk' => 'Daun pepaya mengandung kaya enzim chymopapain dan papain yang mampu menormalkan kadar trombosit dan mencegah kerusakan liver akibat demam berdarah.',
                'foto' => 'public/images/produk/7.jpg',
                'qty' => '1',
                'satuan' => 'ikat',
                'harga' => '15000',
                'status' => 'Publish'
            ],

            // Kosmetik
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '001',
                'nama_produk' => 'Lipstik',
                'slug_produk' => 'Lipstik',
                'deskripsi_produk' => 'Lipstik biasa dimanfaatkan untuk memberikan warna pada bibir. ',
                'foto' => 'public/images/produk/lipstik.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '25000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '002',
                'nama_produk' => 'Maskara',
                'slug_produk' => 'Maskara',
                'deskripsi_produk' => 'Maskara adalah kosmetik yang umumnya digunakan untuk memperindah mata. Fungsinya antara lain untuk mempergelap, mempertebal, memperpanjang, dan/atau memperjelas bulu mata.',
                'foto' => 'public/images/produk/maskara.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '45000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '003',
                'nama_produk' => 'Ellips',
                'slug_produk' => 'Ellips',
                'deskripsi_produk' => 'Ellips merupakan brand untuk perawatan rambut yang sampai sekarang sudah terkenal di pasaran.',
                'foto' => 'public/images/produk/vitrambut.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '3000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '004',
                'nama_produk' => 'Celak',
                'slug_produk' => 'Celak',
                'deskripsi_produk' => 'Digunakan untuk mempercantik dan menegaskan bentuk mata. Celak digunakan di sekeliling kontur mata untuk menciptakan berbagai efek estetika.',
                'foto' => 'public/images/produk/celak.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '45000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '005',
                'nama_produk' => 'Black Mask',
                'slug_produk' => 'Black MAsk',
                'deskripsi_produk' => 'Merupakan masker yang digunakan diwajah dengan tujuan untuk mengangkat sel kulit yang telah mati, membuat kulit tampak lebih cerah, membuka pori-pori kulit yang tersumbat, merilekskan otot wajah, melembutkan sekaligus menghaluskan kulit, serta mengembalikan kelembapan kulit.',
                'foto' => 'public/images/produk/masker.jpg',
                'qty' => '1',
                'satuan' => 'buah',
                'harga' => '52000',
                'status' => 'Publish'
            ],
            [
                'kategori_id' => '005',
                'user_id' => 1,
                'kode_produk' => '006',
                'nama_produk' => 'Astagina',
                'slug_produk' => 'Astagina',
                'deskripsi_produk' => 'Astagina adalah produk perawatan wajah alami dan tradisional yang dibuat dari tepung beras dan mampu memberikan sensai dingin atau adem di wajah saat diaplikasikan. ',
                'foto' => 'public/images/produk/bedakdingin.jpg',
                'qty' => '1',
                'satuan' => 'kotak',
                'harga' => '25000',
                'status' => 'Publish'
            ],
        ];
        \DB::table('produk')->insert($produk);
    }
}

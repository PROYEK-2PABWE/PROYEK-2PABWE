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
            ]
        ];
        \DB::table('produk')->insert($produk);
    }
}

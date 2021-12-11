<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori = [
            [
                'kode_kategori' => '001',
                'nama_kategori' => 'Semua',
                'slug_kategori' => 'Semua',
                'deskripsi_kategori' => 'Bagian ini akan menampilkan berbagai macam produk yang berasal dari beberapa kategori',
                'status' => 'Publish',
                'foto' => 'public/images/kategori/sehat.jpg',
                'user_id' => '1'
            ],
            [
                'kode_kategori' => '002',
                'nama_kategori' => 'Obat',
                'slug_kategori' => 'Obat',
                'deskripsi_kategori' => 'Bagian ini akan menampilkan berbagai macam produk yang berasal dari kategori obat',
                'status' => 'Publish',
                'foto' => 'public/images/kategori/medicine.jpg',
                'user_id' => '1'
            ],
            [
                'kode_kategori' => '003',
                'nama_kategori' => 'Alat Kesehatan',
                'slug_kategori' => 'Alat Kesehatan',
                'deskripsi_kategori' => 'Bagian ini akan menampilkan berbagai macam produk yang berasal dari kategori alat Kesehatan',
                'status' => 'Publish',
                'foto' => 'public/images/kategori/Alat.jpg',
                'user_id' => '1'
            ],
            [
                'kode_kategori' => '004',
                'nama_kategori' => 'Obat Herbal',
                'slug_kategori' => 'Obat Herbal',
                'deskripsi_kategori' => 'Bagian ini akan menampilkan berbagai macam produk yang berasal dari kategori obat herbal',
                'status' => 'Publish',
                'foto' =>  'public/images/kategori/Rempah.jpg',
                'user_id' => '1'
            ],
            [
                'kode_kategori' => '005',
                'nama_kategori' => 'Kosmetik',
                'slug_kategori' => 'Kosmetik',
                'deskripsi_kategori' => 'Bagian ini akan menampilkan berbagai macam produk yang berasal dari kategori kosmetik',
                'status' => 'Publish',
                'foto' => 'public/images/kategori/Kosmetik.jpg',
                'user_id' => '1'
            ],
        ];
        DB::table('kategori')->insert($kategori);
    }
}

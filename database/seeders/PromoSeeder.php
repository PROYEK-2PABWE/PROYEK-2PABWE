<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function getId($kategori_id, $kode_produk)
    {
        $produk = Produk::all()
            ->where('kategori_id', $kategori_id)
            ->where('kode_produk', $kode_produk)
            ->first();

        return $produk->id;
    }

    public function getHarga($kategori_id, $kode_produk)
    {
        $produk = Produk::all()
            ->where('kategori_id', $kategori_id)
            ->where('kode_produk', $kode_produk)
            ->first();

        return $produk->harga;
    }

    public function getHargaAkhir($kategori_id, $kode_produk, $diskon)
    {
        $produk = Produk::all()
            ->where('kategori_id', $kategori_id)
            ->where('kode_produk', $kode_produk)
            ->first();

        return ($produk->harga * $diskon) / 100;
    }

    public function run()
    {
        //Promo-1
        $promo = [
            [
                'produk_id' => $this->getId('001', '001'),
                'harga_awal' =>  $this->getHarga('001', '001'),
                'harga_akhir' =>  $this->getHargaAkhir('001', '001', 10),
                'diskon_persen' => '10',
                'diskon_nominal' => '0',
                'user_id' => '1',
            ],
        ];
        DB::table('produk_promo')->insert($promo);
    }
}

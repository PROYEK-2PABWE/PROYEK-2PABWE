<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Promo-1
        $promo = [
            [
                'produk_id' => '',
                'harga_awal' => '',
                'harga_akhir' => '',
                'diskon_persen' => '',
                'diskon_nominal' => '',
                'user_id' => '',
            ],
        ];
        DB::table('promo')->insert($promo);
    }
}

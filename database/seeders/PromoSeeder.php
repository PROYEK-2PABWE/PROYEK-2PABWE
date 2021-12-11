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
        //
        $promo = [
            //Semua
            [
                'produk_id' = > 'Tylenol-(001)',
                'harga_awal' => '45000',
                'harga_akhir' => '42750',
                'diskon_persen' => '5',
                'diskon_nominal' => '2250',
                'user_id' => '1'
            ],
        ];
        \DB::table('promo')->insert($promo);
    }
}

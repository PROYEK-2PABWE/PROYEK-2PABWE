<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slideshow = [
            [
                'foto' => 'public/images/slide/masker.jpg',
                'user_id' => '1'
            ],
            [
                'foto' => 'public/images/slide/terbaru0.jpg',
                'user_id' => '1'
            ],
            [
                'foto' => 'public/images/slide/catkuku.jpg',
                'user_id' => '1'
            ],
        ];

        DB::table('slideshow')->insert($slideshow);
    }
}

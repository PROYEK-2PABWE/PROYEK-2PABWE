<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'the admin user',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'phone' => '085261740277',
                'alamat' => 'Jl. Ir. Bisuk Siahaan, Parmaksian',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'the member user',
                'email' => 'member@gmail.com',
                'role' => 'member',
                'phone' => '085261740277',
                'alamat' => 'Jl. Ir. Bisuk Siahaan, Parmaksian',
                'password' => Hash::make('password'),

            ],
        ];
        DB::table('users')->insert($user);
    }
}

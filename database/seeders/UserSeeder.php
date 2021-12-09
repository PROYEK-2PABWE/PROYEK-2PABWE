<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Trivena Panjaitan',
            'email' => 'trivenapanjaitan7.1.3@gmail.com',
            'password' => Hash::make('jesus4ever'),
            'alamat' => 'Jl. Ir. Bisuk Siahaan, Parmaksian',
            'role' => 'admin'
        ]);
    }
}

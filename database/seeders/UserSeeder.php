<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'      => 'Administrator',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('password'),
                'role'      => 1,
            ],
            [
                'name'      => 'Kepala Desa',
                'email'     => 'kades@gmail.com',
                'password'  => bcrypt('password'),
                'role'      => 2,
            ]
        ]);
    }
}

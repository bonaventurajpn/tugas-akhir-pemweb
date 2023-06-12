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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('passadmin'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('passpetugas'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'Peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('passpeminjam'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO users (id, nama_lengkap, username, email, password, no_telp, provinsi_id, kabupaten_id, kode_pos, alamat_lengkap, level_user) VALUES
        (1, 'Admin', 'admin', 'admin@gmail.com', '" . bcrypt('admin') . "', null, null, null, null, null, 'Admin'),
        (2, 'Pengguna', 'pengguna', 'pengguna@gmail.com', '" . bcrypt('pengguna') . "', '0895339390753', 35, 3576, '61354', 'Kota Mojokerto, Pulorejo', 'Pengguna')
        ");
    }
}

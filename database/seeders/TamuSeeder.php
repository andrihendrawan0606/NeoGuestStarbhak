<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walimurid')->insert([
            'nama_walimurid' => 'Ucok',
            'nama_siswa' => 'Angkasa Raya',
            'kelas' => 'XII RPL 1',
            'keperluan' => 'Ngopss',
            'tujuan' => 'Ngopss',
            'suhu_tubuh' => 100,
            'status' => 'selesai',
            'tgl_post' => '2021-08-06'
        ]);
        DB::table('perusahaan')->insert([
            'nama_perusahaan' => 'PT JAYA ESPORT',
            'jumlah_anggota' => 5,
            'nama_penanggungjawab' => 'Ikhsan',
            'keperluan' => 'Ngopss',
            'tujuan' => 'Ngopss',
            'suhu_tubuh' => 100,
            'status' => 'proses',
            'tgl_post' => '2021-08-07'
        ]);
    }
}

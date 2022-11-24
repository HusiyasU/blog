<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data_siswa = [
            [
            'nama' => 'Alief Wafiudin',
            'kelas' => 'XI PPLG',
            'umur' => random_int(15, 30),
            ],
            [
            'nama' => 'Anggara prima',
            'kelas' => 'XI PPLG',
            'umur' => random_int(15, 30),
            ],
            [
            'nama' => 'Neni destiani',
            'kelas' => 'XI PPLG',
            'umur' => random_int(15, 30),
            ],
            
        ];

        //proses hapus data
        $siswa = DB::table('siswa')->truncate();

        //proses simpan data
        foreach ($data_siswa as $data){
        DB::table('siswa')->insert([
            'nama' => $data['nama'],
            'kelas' => $data['kelas'],
            'umur' => $data['umur'],
        ]);
        }
        
        //proses ambil data dari tabel siswa
        $siswa = DB::table('siswa')->get();
        dd($siswa);
    }
}

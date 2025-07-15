<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'judul' => 'Pemrograman Javascript',
                'pengarang' => 'Anton Kurniawan',
                'tahun_terbit' => '2004',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Belajar Laravel',
                'pengarang' => 'Muhamad Machrus Ali Wahyudi',
                'tahun_terbit' => '2005',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('buku')->insert($buku);
    }
}

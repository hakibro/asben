<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\SiswaModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("siswas")->insert([
            'id_siswa' => 'AAA',
            'nama' => 'Ridwan Kamil',
            'kelas' => 'XBD1',
            'kehadiran' => 'H',
            'tanggal' => now(),
        ]);
    }
}

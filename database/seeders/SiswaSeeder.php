<?php

namespace Database\Seeders;

use App\Models\SiswaModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $kehadiran = collect(['H', 'S', 'I', 'A']);
        // $kelas = collect(['XBD1', 'XDPIB', 'XTKJ2', 'XTKJ1']);

        // DB::table('siswas')->insert([
        //     'id_siswa' => Str::random(4),
        //     'nama' => Str::random(10),
        //     'kelas' => $kelas->random(),
        //     'kehadiran' => $kehadiran->random(),
        //     'tanggal' => now()
        // ]);

        SiswaModel::table("siswas")->insert([
            'id_siswa' => 'AAA',
            'nama' => 'Ridwan Kamil',
            'kelas' => 'XBD1',
            'kehadiran' => 'H',
            'tanggal' => now(),
        ]);
    }
}

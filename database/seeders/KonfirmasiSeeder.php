<?php

namespace Database\Seeders;

use App\Models\Konfirmasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfirmasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('konfirmasis')->delete();

        $konfirmasis = [
            ['konfirmasi' => 'Belum dibayar'],
            ['konfirmasi' => 'Menunggu konfirmasi'],
            ['konfirmasi' => 'Berhasil disewa'],
        ];

        Konfirmasi::insert($konfirmasis);
    }
}

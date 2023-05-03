<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mobils')->delete();

        $mobils = [
            ['nama_mobil' => 'Avansa 107', 'harga_sewa' => 100000, 'status_id' => 1],
            ['nama_mobil' => 'Miyo 200', 'harga_sewa' => 210000, 'status_id' => 1],
            ['nama_mobil' => 'Herex 303', 'harga_sewa' => 50000, 'status_id' => 1],
            ['nama_mobil' => 'Jupiter 400', 'harga_sewa' => 400000, 'status_id' => 1],

        ];

        Mobil::insert($mobils);
    }
}

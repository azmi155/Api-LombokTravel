<?php

use Illuminate\Database\Seeder;

class PaketLombokTravel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_lombok_travel')->insert([
            'nama_paket' => '3 H 2 M',
            'durasi' => '3 Hari 2 Malam',
            'tujuan' => 'Gili Terawangan, Air Terjun Tiu Kelep',
            'fasilitas' => 'Penginapan, jemput antar',            
            'Harga' => 'Rp. 500.0000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

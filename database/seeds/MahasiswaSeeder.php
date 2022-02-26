<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Tedi Julianto',
            'alamat' => 'petukangan',
            'no_telp' => '088889898998',
            'fakultas_id' => 1,
            'program_studi_id' =>1
        ]);
    }
}

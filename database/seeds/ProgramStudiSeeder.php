<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program_studis')->insert([
            'fakultas_id' => 1,
            'nama_program_studi' => 'Teknik Informatika',
        ]);   
    }
}

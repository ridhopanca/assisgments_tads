<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = ['id','nama','alamat','no_telp','fakultas_id','program_studi_id'];
}

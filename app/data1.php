<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data1 extends Model
{
    protected $table = 'data1';
    protected $fillable = ['nama_lengkap','nama_panggilan','jenis_kelamin','ttl','agama','cita','kandung','tiri','angkat','berat_badan','tinggi_badan','darah','id_siswa'];
}

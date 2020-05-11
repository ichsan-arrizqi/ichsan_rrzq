<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data2 extends Model
{
    protected $table = "data2";
    protected $fillable = ['alamat','kelurahan','kecamatan','kota/kabupaten','provinsi','kode_pos','no','email','tinggal','id_siswa'];
}

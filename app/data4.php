<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data4 extends Model
{
    protected $table = 'data4';
    protected $fillable = ['nama_ayah','ttl_ayah','pekerjaan_ayah','pendidikan_ayah','kewarganegaraan_ayah','agama_ayah','no_ayah','nama_ibu','ttl_ibu','pekerjaan_ibu','kewarganegaraan_ibu','agama_ibu','no_ibu','nama_wali','ttl_wali','pekerjaan_wali','kewarganegaraan_wali','agama_wali','no_wali','hubungan_wali','email_wali','id_siswa'];
}

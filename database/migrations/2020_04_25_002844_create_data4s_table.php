<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateData4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data4', function (Blueprint $table) {
            $table->id();
            //ayah
            $table->string('nama_ayah')->nullable();
            $table->string('ttl_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('kewarganegaraan_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('no_ayah')->nullable();
            //ibu
            $table->string('nama_ibu')->nullable();
            $table->string('ttl_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('kewarganegaraan_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('no_ibu')->nullable();
            //wali
            $table->string('nama_wali')->nullable();
            $table->string('ttl_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('no_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('email_wali')->nullable();
            $table->integer('id_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data4');
    }
}

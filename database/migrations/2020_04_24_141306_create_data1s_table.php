<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateData1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('agama');
            $table->string('cita');
            $table->integer('kandung');
            $table->integer('tiri');
            $table->integer('angkat');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->char('darah');
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
        Schema::dropIfExists('data1');
    }
}

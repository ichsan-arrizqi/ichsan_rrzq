<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateData3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data3', function (Blueprint $table) {
            $table->id();
            $table->string('tbc');
            $table->string('malaria');
            $table->string('chotipa');
            $table->string('cacar');
            $table->string('lainnya');
            $table->string('jasmani');
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
        Schema::dropIfExists('data3');
    }
}

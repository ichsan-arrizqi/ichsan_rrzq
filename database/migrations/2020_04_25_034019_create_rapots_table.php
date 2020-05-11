<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapot', function (Blueprint $table) {
            $table->id();
            $table->integer('pai_sm1_7');
            $table->integer('pai_sm2_7');
            $table->integer('pai_sm1_8');
            $table->integer('pai_sm2_8');
            $table->integer('pai_sm1_9');
            $table->integer('bindo_sm1_7');
            $table->integer('bindo_sm2_7');
            $table->integer('bindo_sm1_8');
            $table->integer('bindo_sm2_8');
            $table->integer('bindo_sm1_9');
            $table->integer('bing_sm1_7');
            $table->integer('bing_sm2_7');
            $table->integer('bing_sm1_8');
            $table->integer('bing_sm2_8');
            $table->integer('bing_sm1_9');
            $table->integer('mtk_sm1_7');
            $table->integer('mtk_sm2_7');
            $table->integer('mtk_sm1_8');
            $table->integer('mtk_sm2_8');
            $table->integer('mtk_sm1_9');
            $table->integer('ipa_sm1_7');
            $table->integer('ipa_sm2_7');
            $table->integer('ipa_sm1_8');
            $table->integer('ipa_sm2_8');
            $table->integer('ipa_sm1_9');
            $table->integer('ips_sm1_7');
            $table->integer('ips_sm2_7');
            $table->integer('ips_sm1_8');
            $table->integer('ips_sm2_8');
            $table->integer('ips_sm1_9');
            $table->string('pres')->nullable();
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
        Schema::dropIfExists('rapot');
    }
}

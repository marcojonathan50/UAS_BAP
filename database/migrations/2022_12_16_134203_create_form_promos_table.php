<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_promos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_promo')->nullable();
            $table->string('deskripsi_promo')->nullable();
            $table->string('diskon')->nullable();
            $table->string('tombol')->nullable();
            $table->string('foto')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_promos');
    }
}

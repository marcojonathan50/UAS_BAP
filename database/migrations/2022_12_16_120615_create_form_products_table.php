<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('Created_at')->nullable();
            $table->dateTime('expired_date')->nullable();
            $table->string('Kategori')->nullable();
            $table->string('Berat')->nullable();
            $table->string('Deskripsi')->nullable();
            $table->string('Nama')->nullable();
            $table->string('Foto')->nullable();
            $table->string('Created_by')->nullable();
            $table->integer('Stock')->nullable();
            $table->integer('Harga')->nullable();
            $table->string('Filter')->nullable();
            $table->dateTime('updated_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_products');
    }
}

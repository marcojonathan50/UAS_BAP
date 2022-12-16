<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_kategoris', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('expired_date')->nullable();
            $table->string('Kategori')->nullable();
            $table->string('Deskripsi')->nullable();
            $table->string('File')->nullable();
            $table->string('Created_by')->nullable();
            $table->string('Filter')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_kategoris');
    }
}

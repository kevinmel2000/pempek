<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDukViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duk_view', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');
            $table->string('golongan');
            $table->string('tmt_golongan')->nullable();
            $table->integer('usia');
            $table->unsignedInteger('unit_kerja_id');
            $table->string('level')->nullable();
            $table->string('masa_kerja');
            $table->integer('jumlah_diklat');
            $table->string('pendidikan');
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
        Schema::drop('duk_view');
    }
}
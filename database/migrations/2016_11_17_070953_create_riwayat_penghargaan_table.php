<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPenghargaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_penghargaan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');
            $table->string('nama_penghargaan');
            $table->string('nomor_surat_keputusan');
            $table->string('tanggal');
            $table->string('nama_pemberi_penghargaan');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_penghargaan', function (Blueprint $table) {
            $table->dropForeign(['pegawai_id']);
            $table->drop('riwayat_penghargaan');
        });
    }
}

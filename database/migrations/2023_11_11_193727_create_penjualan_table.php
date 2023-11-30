<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->string('Kategori');
            $table->string('Nm_Group');
            $table->foreignId('Kd_Cabang')->references('Kd_Cabang')->on('cabang');
            $table->string('Tipe');
            $table->date('Tgl_Trans');
            $table->foreignId('Kd_Terapi')->references('Kd_Terapi')->on('terapi');
            $table->foreignId('Kd_Medis')->references('Kd_Medis')->on('medis');
            $table->foreignId('Kd_Jenis')->references('Kd_Jenis')->on('jenis_medis');
            $table->integer('No_Reg');
            $table->foreignId('Kd_Barang')->references('Kd_Barang')->on('barang');
            $table->string('Nama');
            $table->integer('Qty');
            $table->integer('Total');
            $table->date('Tgl_Entry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};

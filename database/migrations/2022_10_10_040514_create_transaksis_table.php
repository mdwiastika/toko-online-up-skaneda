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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_transaksi')->comment('dibuat saat pertama kali melakukan transaksi');
            $table->string('kode_invoice')->comment('dibaca saat merubah status transaksi di admin');
            $table->date('tanggal_transaksi');
            $table->enum('status_transaksi', ['Pending', 'Tolak', 'Proses Admin', 'Pengiriman', 'Selesai']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign("user_id")->references('id')->on('users');
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign("provinsi_id")->references('id_provinsi')->on('provinsis');
            $table->unsignedBigInteger('kabupaten_id')->nullable();
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('kabupatens');
            $table->string('kode_pos');
            $table->text('alamat_lengkap');
            $table->string('ekspedisi')->comment('Hanya jne');
            $table->text('catatan_pembeli');
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
        Schema::dropIfExists('transaksis');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp', 15)->nullable();
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign("provinsi_id")->references('id_provinsi')->on('provinsis')->onDelete('cascade');
            $table->unsignedBigInteger('kabupaten_id')->nullable();
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('kabupatens')->onDelete('cascade');
            $table->string('kode_pos')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->enum('level_user', ['Admin', 'Pengguna']);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

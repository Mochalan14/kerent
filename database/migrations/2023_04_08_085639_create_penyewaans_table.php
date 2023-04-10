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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('mobils_id');
            $table->foreign('mobils_id')->references('id')->on('mobils');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->decimal('total_harga', 10, 2);
            $table->string('bukti_pembayaran');
            $table->unsignedBigInteger('konfirmasis_id');
            $table->foreign('konfirmasis_id')->references('id')->on('konfirmasis');
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
        Schema::dropIfExists('penyewaans');
    }
};

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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam', 45);
            $table->string('ktp_peminjam', 20);
            $table->string('keperluan_pinjam', 100);
            $table->date('mulai');
            $table->date('selesai');
            $table->double('biaya', 15, 2);
            $table->foreignId('armada_id')->constrained('armada')->onDelete('cascade');
            $table->string('komentar_peminjam', 100)->nullable();
            $table->string('status_pinjam', 20);
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
        Schema::dropIfExists('peminjaman');
    }
};

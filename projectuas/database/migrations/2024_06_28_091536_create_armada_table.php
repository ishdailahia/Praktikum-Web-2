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
        Schema::create('armada', function (Blueprint $table) {
            $table->id();
            
            $table->string('foto', 20);
            $table->string('merk', 30);
            $table->string('nopol', 20);
            $table->year('thn_beli');
            $table->string('deskripsi', 200);
            $table->foreignId('kendaraan_id')->constrained('kendaraan')->onDelete('cascade');
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
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
        Schema::dropIfExists('armada');
    }
};

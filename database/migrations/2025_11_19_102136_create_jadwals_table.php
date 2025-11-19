<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_id');
            $table->foreign('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');
            $table->unsignedBigInteger('instruktur_id');
            $table->foreign('instruktur_id')->references('id')->on('instrukturs')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('waktu');
            $table->enum('status', ['terjadwal','selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};

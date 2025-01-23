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
        Schema::create('data_kabkota', function (Blueprint $table) {
            $table->id();
            $table->year('tahun'); // Tahun sebagai kolom bertipe year atau integer
            $table->foreignId('nama_data_id')->constrained('nama_data')->onDelete('cascade'); // Relasi ke tabel nama_data
            $table->foreignId('kabkota_id')->constrained('kabkota')->onDelete('cascade'); // Relasi ke tabel kabkota
            $table->double('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakabkotas');
    }
};

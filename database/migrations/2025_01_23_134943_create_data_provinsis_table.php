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
        Schema::create('data_provinsi', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->foreignId('nama_data_id')->constrained('nama_data');
            $table->foreignId('provinsi_id')->constrained('provinsi');
            $table->double('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_provinsis');
    }
};

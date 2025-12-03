<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pengguna_layanans', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pesantren_id')
        ->constrained('pesantrens')
        ->cascadeOnDelete();
      $table->foreignId('jenis_layanan_id')
        ->constrained('jenis_layanans')
        ->cascadeOnDelete();
      $table->date('tanggal_mulai');
      $table->date('tanggal_selesai')->nullable();
      $table->boolean('aktif')->default(true);
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('pengguna_layanans');
  }
};

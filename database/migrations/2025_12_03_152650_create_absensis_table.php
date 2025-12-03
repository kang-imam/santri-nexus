<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('absensis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('kegiatan_id')
        ->constrained('kegiatans')
        ->cascadeOnDelete();
      $table->foreignId('santri_id')
        ->constrained('santris')
        ->cascadeOnDelete();
      $table->enum('status', ['hadir', 'alpa', 'izin', 'sakit'])
        ->default('alpa');
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('absensis');
  }
};

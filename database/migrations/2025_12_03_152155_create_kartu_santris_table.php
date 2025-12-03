<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kartu_santris', function (Blueprint $table) {
      $table->id();
      $table->foreignId('santri_id')
        ->constrained('santris')
        ->cascadeOnDelete();
      $table->string('nomor_kartu')->unique();
      $table->string('pin', 6);
      $table->enum('status', ['aktif', 'hilang', 'rusak', 'nonaktif'])
        ->default('nonaktif');
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kartu_santris');
  }
};

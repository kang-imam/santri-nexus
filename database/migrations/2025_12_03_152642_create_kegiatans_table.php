<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kegiatans', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pesantren_id')
        ->constrained('pesantrens')
        ->cascadeOnDelete();
      $table->string('nama_kegiatan');
      $table->text('keterangan')->nullable();
      $table->date('tanggal');
      $table->time('mulai');
      $table->time('selesai');
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kegiatans');
  }
};

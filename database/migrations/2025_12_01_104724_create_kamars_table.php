<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kamars', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->foreignId('asrama_id')->constrained('asramas')->cascadeOnDelete();
      $table->unsignedInteger('kapasitas')->default(1);
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kamars');
  }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('wali_santris', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
      $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('wali_santris');
  }
};

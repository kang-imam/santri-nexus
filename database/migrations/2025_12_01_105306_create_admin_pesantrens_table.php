<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('admin_pesantrens', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
      $table->foreignId('pesantren_id')->constrained('pesantrens')->cascadeOnDelete();
      $table->foreignId('jenis_kelamin_id')->nullable()->constrained('jenis_kelamins')->cascadeOnDelete();
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('admin_pesantrens');
  }
};

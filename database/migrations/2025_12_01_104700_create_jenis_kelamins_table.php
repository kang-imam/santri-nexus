<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('jenis_kelamins', function (Blueprint $table) {
      $table->id();
      $table->string('kode', 1)->unique();
      $table->string('nama');
      $table->timestamps();
    });
    DB::table('jenis_kelamins')->insert([
      [
        'kode' => 'L',
        'nama' => 'Laki-laki',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'kode' => 'P',
        'nama' => 'Perempuan',
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
  public function down(): void
  {
    Schema::dropIfExists('jenis_kelamins');
  }
};

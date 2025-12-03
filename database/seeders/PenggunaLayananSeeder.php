<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Pesantren;
use App\Models\JenisLayanan;

class PenggunaLayananSeeder extends Seeder
{
  public function run(): void
  {
    $now = Carbon::now();
    $pesantrens = Pesantren::all();
    $pakets = JenisLayanan::all();
    if ($pakets->isEmpty()) {
      $this->command->error("Belum ada paket layanan. Jalankan JenisLayananSeeder terlebih dahulu.");
      return;
    }
    foreach ($pesantrens as $pesantren) {
      $paketRandom = $pakets->random();
      DB::table('pengguna_layanans')->insert([
        'pesantren_id' => $pesantren->id,
        'jenis_layanan_id' => $paketRandom->id,
        'tanggal_mulai' => $now->toDateString(),
        'tanggal_selesai' => null,
        'aktif' => true,
        'created_at' => $now,
        'updated_at' => $now,
      ]);
    }
  }
}

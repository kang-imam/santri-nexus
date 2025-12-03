<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absensi;
use App\Models\Kegiatan;
use App\Models\Santri;
use Faker\Factory as Faker;

class AbsensiSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $kegiatans = Kegiatan::all();
    $santris = Santri::all();
    if ($kegiatans->isEmpty() || $santris->isEmpty()) {
      $this->command->info('Tidak ada data kegiatan atau santri. Seeder dibatalkan.');
      return;
    }
    foreach ($kegiatans as $kegiatan) {
      foreach ($santris as $santri) {
        Absensi::create([
          'kegiatan_id' => $kegiatan->id,
          'santri_id'   => $santri->id,
          'status'      => $faker->randomElement(['hadir', 'alpa', 'izin', 'sakit']),
        ]);
      }
    }
  }
}

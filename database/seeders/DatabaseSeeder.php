<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call([
      ProvinsiSeeder::class,
      KotaSeeder::class,
      KecamatanSeeder::class,
      DesaSeeder::class,
      PesantrenSeeder::class,
      AsramaSeeder::class,
      KamarSeeder::class,
      SantriSeeder::class,
      AdminProvinsiSeeder::class,
      AdminKotaSeeder::class,
      AdminKecamatanSeeder::class,
      AdminDesaSeeder::class,
      AdminPesantrenSeeder::class,
      WaliSantriSeeder::class,
      JenisLayananSeeder::class,
      PenggunaLayananSeeder::class,
      KartuSantriSeeder::class,
      KegiatanSeeder::class,
      AbsensiSeeder::class,
    ]);
  }
}

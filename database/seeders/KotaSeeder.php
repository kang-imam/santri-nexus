<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;
use App\Models\Provinsi;

class KotaSeeder extends Seeder
{
  public function run()
  {
    $provinsi_jawa_barat = Provinsi::where('nama', 'Jawa Barat')->first();
    $provinsi_jawa_tengah = Provinsi::where('nama', 'Jawa Tengah')->first();
    $provinsi_jawa_timur = Provinsi::where('nama', 'Jawa Timur')->first();
    $provinsi_bali = Provinsi::where('nama', 'Bali')->first();
    $provinsi_sumatera_utara = Provinsi::where('nama', 'Sumatera Utara')->first();
    Kota::create([
      'jenis' => 'Kota',
      'nama' => 'Bandung',
      'provinsi_id' => $provinsi_jawa_barat->id
    ]);
    Kota::create([
      'jenis' => 'Kota',
      'nama' => 'Semarang',
      'provinsi_id' => $provinsi_jawa_tengah->id
    ]);
    Kota::create([
      'jenis' => 'Kota',
      'nama' => 'Surabaya',
      'provinsi_id' => $provinsi_jawa_timur->id
    ]);
    Kota::create([
      'jenis' => 'Kota',
      'nama' => 'Denpasar',
      'provinsi_id' => $provinsi_bali->id
    ]);
    Kota::create([
      'jenis' => 'Kota',
      'nama' => 'Medan',
      'provinsi_id' => $provinsi_sumatera_utara->id
    ]);
  }
}

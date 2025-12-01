<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
  public function run()
  {
    $bandung   = Kota::where('nama', 'Bandung')->first();
    $semarang  = Kota::where('nama', 'Semarang')->first();
    $surabaya  = Kota::where('nama', 'Surabaya')->first();
    $denpasar  = Kota::where('nama', 'Denpasar')->first();
    $medan     = Kota::where('nama', 'Medan')->first();
    Kecamatan::create([
      'nama' => 'Coblong',
      'kota_id' => $bandung->id
    ]);
    Kecamatan::create([
      'nama' => 'Lengkong',
      'kota_id' => $bandung->id
    ]);
    Kecamatan::create([
      'nama' => 'Cicendo',
      'kota_id' => $bandung->id
    ]);
    Kecamatan::create([
      'nama' => 'Tembalang',
      'kota_id' => $semarang->id
    ]);
    Kecamatan::create([
      'nama' => 'Pedurungan',
      'kota_id' => $semarang->id
    ]);
    Kecamatan::create([
      'nama' => 'Wonokromo',
      'kota_id' => $surabaya->id
    ]);
    Kecamatan::create([
      'nama' => 'Tegalsari',
      'kota_id' => $surabaya->id
    ]);
    Kecamatan::create([
      'nama' => 'Denpasar Utara',
      'kota_id' => $denpasar->id
    ]);
    Kecamatan::create([
      'nama' => 'Denpasar Selatan',
      'kota_id' => $denpasar->id
    ]);
    Kecamatan::create([
      'nama' => 'Medan Kota',
      'kota_id' => $medan->id
    ]);
    Kecamatan::create([
      'nama' => 'Medan Barat',
      'kota_id' => $medan->id
    ]);
  }
}

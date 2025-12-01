<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
  public function run()
  {
    Provinsi::create([
      'nama' => 'Jawa Barat'
    ]);
    Provinsi::create([
      'nama' => 'Jawa Tengah'
    ]);
    Provinsi::create([
      'nama' => 'Jawa Timur'
    ]);
    Provinsi::create([
      'nama' => 'Bali'
    ]);
    Provinsi::create([
      'nama' => 'Sumatera Utara'
    ]);
  }
}

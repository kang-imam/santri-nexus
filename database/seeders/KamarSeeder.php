<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asrama;
use App\Models\Kamar;

class KamarSeeder extends Seeder
{
  public function run()
  {
    $asramas = Asrama::all();
    foreach ($asramas as $asrama) {
      for ($i = 1; $i <= 3; $i++) {
        Kamar::create([
          'nama' => 'Kamar ' . $i . ' - ' . $asrama->nama,
          'asrama_id' => $asrama->id,
          'kapasitas' => 10
        ]);
      }
    }
  }
}

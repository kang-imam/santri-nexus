<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesantren;
use App\Models\Asrama;

class AsramaSeeder extends Seeder
{
  public function run()
  {
    $pesantrens = Pesantren::all();
    foreach ($pesantrens as $pesantren) {
      Asrama::create([
        'nama' => 'Asrama Putra ' . $pesantren->nama,
        'pesantren_id' => $pesantren->id,
        'jenis_kelamin_id' => 1
      ]);
      Asrama::create([
        'nama' => 'Asrama Putri ' . $pesantren->nama,
        'pesantren_id' => $pesantren->id,
        'jenis_kelamin_id' => 2
      ]);
    }
  }
}

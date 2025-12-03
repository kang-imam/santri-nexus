<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;
use App\Models\Pesantren;
use Faker\Factory as Faker;

class KegiatanSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $pesantrens = Pesantren::all();
    if ($pesantrens->isEmpty()) {
      $this->command->info('Tidak ada data pesantren. Seeder dibatalkan.');
      return;
    }
    foreach ($pesantrens as $pesantren) {
      for ($i = 0; $i < 10; $i++) {
        Kegiatan::create([
          'pesantren_id'  => $pesantren->id,
          'nama_kegiatan' => $faker->sentence(3),
          'keterangan'    => $faker->paragraph(),
          'tanggal'       => $faker->date(),
          'mulai'         => $faker->time('H:i:s'),
          'selesai'       => $faker->time('H:i:s'),
        ]);
      }
    }
  }
}

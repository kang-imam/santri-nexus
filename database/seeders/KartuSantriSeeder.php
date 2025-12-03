<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KartuSantri;

class KartuSantriSeeder extends Seeder
{
  public function run(): void
  {
    $nomorKartuList = [
      '0001969868',
      '0002002236',
      '0001949795',
      '0002091575',
      '0001990837',
    ];
    foreach ($nomorKartuList as $nomorKartu) {
      KartuSantri::create([
        'santri_id' => \App\Models\Santri::inRandomOrder()->first()->id,
        'nomor_kartu' => $nomorKartu,
        'pin' => str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT),
        'status' => collect(['aktif', 'nonaktif', 'hilang', 'rusak'])->random(),
      ]);
    }
  }
}

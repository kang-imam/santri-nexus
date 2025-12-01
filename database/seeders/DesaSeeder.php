<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kecamatan;
use App\Models\Desa;

class DesaSeeder extends Seeder
{
  public function run()
  {
    $coblong         = Kecamatan::where('nama', 'Coblong')->first();
    $lengkong        = Kecamatan::where('nama', 'Lengkong')->first();
    $cicendo         = Kecamatan::where('nama', 'Cicendo')->first();
    $tembalang       = Kecamatan::where('nama', 'Tembalang')->first();
    $pedurungan      = Kecamatan::where('nama', 'Pedurungan')->first();
    $wonokromo       = Kecamatan::where('nama', 'Wonokromo')->first();
    $tegalsari       = Kecamatan::where('nama', 'Tegalsari')->first();
    $denpasar_utara  = Kecamatan::where('nama', 'Denpasar Utara')->first();
    $denpasar_selatan = Kecamatan::where('nama', 'Denpasar Selatan')->first();
    $medan_kota      = Kecamatan::where('nama', 'Medan Kota')->first();
    $medan_barat     = Kecamatan::where('nama', 'Medan Barat')->first();
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Dago',
      'kecamatan_id' => $coblong->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Lebak Gede',
      'kecamatan_id' => $coblong->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Cikawao',
      'kecamatan_id' => $lengkong->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Burangrang',
      'kecamatan_id' => $lengkong->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Pajajaran',
      'kecamatan_id' => $cicendo->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Sukajadi',
      'kecamatan_id' => $cicendo->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Tembalang',
      'kecamatan_id' => $tembalang->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Bulusan',
      'kecamatan_id' => $tembalang->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Gemah',
      'kecamatan_id' => $pedurungan->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Palebon',
      'kecamatan_id' => $pedurungan->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Sawunggaling',
      'kecamatan_id' => $wonokromo->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Jagir',
      'kecamatan_id' => $wonokromo->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Kedungdoro',
      'kecamatan_id' => $tegalsari->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Tegalsari',
      'kecamatan_id' => $tegalsari->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Peguyangan',
      'kecamatan_id' => $denpasar_utara->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Tonja',
      'kecamatan_id' => $denpasar_utara->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Pemogan',
      'kecamatan_id' => $denpasar_selatan->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Panjer',
      'kecamatan_id' => $denpasar_selatan->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Sei Rengas',
      'kecamatan_id' => $medan_kota->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Teladan',
      'kecamatan_id' => $medan_kota->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Glugur Kota',
      'kecamatan_id' => $medan_barat->id
    ]);
    Desa::create([
      'jenis' => 'Kelurahan',
      'nama' => 'Kesawan',
      'kecamatan_id' => $medan_barat->id
    ]);
  }
}

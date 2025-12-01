<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Desa;
use App\Models\Pesantren;

class PesantrenSeeder extends Seeder
{
  public function run()
  {
    $dago             = Desa::where('nama', 'Dago')->first();
    $lebak_gede       = Desa::where('nama', 'Lebak Gede')->first();
    $cikawao          = Desa::where('nama', 'Cikawao')->first();
    $burangrang       = Desa::where('nama', 'Burangrang')->first();
    $pajajaran        = Desa::where('nama', 'Pajajaran')->first();
    $sukajadi         = Desa::where('nama', 'Sukajadi')->first();
    $tembalang        = Desa::where('nama', 'Tembalang')->first();
    $bulusan          = Desa::where('nama', 'Bulusan')->first();
    $gemah            = Desa::where('nama', 'Gemah')->first();
    $palebon          = Desa::where('nama', 'Palebon')->first();
    $sawunggaling     = Desa::where('nama', 'Sawunggaling')->first();
    $jagir            = Desa::where('nama', 'Jagir')->first();
    $kedungdoro       = Desa::where('nama', 'Kedungdoro')->first();
    $tegalsari        = Desa::where('nama', 'Tegalsari')->first();
    $peguyangan       = Desa::where('nama', 'Peguyangan')->first();
    $tonja            = Desa::where('nama', 'Tonja')->first();
    $pemogan          = Desa::where('nama', 'Pemogan')->first();
    $panjer           = Desa::where('nama', 'Panjer')->first();
    $sei_rengas       = Desa::where('nama', 'Sei Rengas')->first();
    $teladan          = Desa::where('nama', 'Teladan')->first();
    $glugur_kota      = Desa::where('nama', 'Glugur Kota')->first();
    $kesawan          = Desa::where('nama', 'Kesawan')->first();
    Pesantren::create([
      'nama' => 'Pesantren Daarut Tauhid',
      'alamat' => 'Jl. Gegerkalong No.99',
      'desa_id' => $dago->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Falah',
      'alamat' => 'Jl. Pahlawan No.12',
      'desa_id' => $lebak_gede->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Miftahul Ulum',
      'alamat' => 'Jl. Cikawao No.3',
      'desa_id' => $cikawao->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Nurul Huda',
      'alamat' => 'Jl. Burangrang No.8',
      'desa_id' => $burangrang->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Ittihad',
      'alamat' => 'Jl. Pajajaran No.77',
      'desa_id' => $pajajaran->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Baiturrahman',
      'alamat' => 'Jl. Sukajadi No.45',
      'desa_id' => $sukajadi->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Roudlotul Jannah',
      'alamat' => 'Jl. Tembalang Raya No.12',
      'desa_id' => $tembalang->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Muttaqin',
      'alamat' => 'Jl. Bulusan No.5',
      'desa_id' => $bulusan->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Hidayah',
      'alamat' => 'Jl. Gemah Utara No.23',
      'desa_id' => $gemah->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Madinah',
      'alamat' => 'Jl. Palebon Tengah No.11',
      'desa_id' => $palebon->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren At-Taqwa',
      'alamat' => 'Jl. Sawunggaling No.99',
      'desa_id' => $sawunggaling->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Darul Muttaqin',
      'alamat' => 'Jl. Jagir No.20',
      'desa_id' => $jagir->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Kautsar',
      'alamat' => 'Jl. Kedungdoro No.17',
      'desa_id' => $kedungdoro->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Nurul Hikmah',
      'alamat' => 'Jl. Tegalsari No.6',
      'desa_id' => $tegalsari->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Hikmah',
      'alamat' => 'Jl. Peguyangan No.10',
      'desa_id' => $peguyangan->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Annur',
      'alamat' => 'Jl. Tonja Selatan No.4',
      'desa_id' => $tonja->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Darunnajah',
      'alamat' => 'Jl. Pemogan Raya No.19',
      'desa_id' => $pemogan->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Raudhatul Ulum',
      'alamat' => 'Jl. Panjer Barat No.2',
      'desa_id' => $panjer->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Munawar',
      'alamat' => 'Jl. Sei Rengas No.3',
      'desa_id' => $sei_rengas->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Nurul Islam',
      'alamat' => 'Jl. Teladan No.8',
      'desa_id' => $teladan->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Al-Ma’arif',
      'alamat' => 'Jl. Glugur Kota No.21',
      'desa_id' => $glugur_kota->id
    ]);
    Pesantren::create([
      'nama' => 'Pesantren Hidayatullah',
      'alamat' => 'Jl. Kesawan No.9',
      'desa_id' => $kesawan->id
    ]);
  }
}

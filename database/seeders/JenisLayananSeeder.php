<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class JenisLayananSeeder extends Seeder
{
  public function run(): void
  {
    $now = Carbon::now();
    DB::table('jenis_layanans')->insert([
      [
        'nama' => 'SantriGo',
        'keterangan' => 'Paket gratis untuk memulai manajemen santri secara digital. Cocok untuk mencoba fitur absensi dan rekap dasar dengan cepat, tanpa biaya. Mulai digitalisasi pesantrenmu sekarang!',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'nama' => 'SantriPro',
        'keterangan' => 'Paket menengah dengan fitur tambahan untuk produktivitas maksimal. Dapatkan absensi digital canggih, laporan grafik kehadiran, dan notifikasi otomatis ke guru & wali. Pesantren lebih tertata, santri lebih terpantau.',
        'created_at' => $now,
        'updated_at' => $now,
      ],
      [
        'nama' => 'SantriMax',
        'keterangan' => 'Paket premium untuk pengelolaan pesantren secara lengkap. Termasuk absensi otomatis QR/fingerprint, integrasi jadwal, analitik mendalam, dan semua fitur lanjutan. Ideal untuk pesantren yang ingin manajemen modern, efisien, dan profesional.',
        'created_at' => $now,
        'updated_at' => $now,
      ],
    ]);
  }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminKota;
use App\Models\User;
use App\Models\Kota;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminKotaSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Admin Kota')->exists()) {
      Role::create(['name' => 'Admin Kota']);
    }
    $kota = Kota::first();
    if (!$kota) {
      $kota = Kota::create([
        'nama_kota' => 'Kota A',
        'kode' => 'KOTA-A',
      ]);
    }
    $adminKotas = [
      ['nama_panggilan' => 'Admin Kota 1', 'email' => 'adminkota1@email.id'],
      ['nama_panggilan' => 'Admin Kota 2', 'email' => 'adminkota2@email.id'],
      ['nama_panggilan' => 'Admin Kota 3', 'email' => 'adminkota3@email.id'],
      ['nama_panggilan' => 'Admin Kota 4', 'email' => 'adminkota4@email.id'],
    ];
    foreach ($adminKotas as $index => $admin) {
      $user = User::create([
        'name' => $admin['nama_panggilan'],
        'email' => $admin['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Admin Kota');
      AdminKota::create([
        'user_id' => $user->id,
        'kota_id' => $kota->id,
      ]);
    }
  }
}

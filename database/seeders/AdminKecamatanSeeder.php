<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminKecamatan;
use App\Models\User;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminKecamatanSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Admin Kecamatan')->exists()) {
      Role::create(['name' => 'Admin Kecamatan']);
    }
    $kecamatan = Kecamatan::first();
    if (!$kecamatan) {
      $kecamatan = Kecamatan::create([
        'nama_kecamatan' => 'Kecamatan A',
        'kode' => 'KEC-A',
      ]);
    }
    $adminKecamatans = [
      ['nama_panggilan' => 'Admin Kecamatan 1', 'email' => 'adminkecamatan1@email.id'],
      ['nama_panggilan' => 'Admin Kecamatan 2', 'email' => 'adminkecamatan2@email.id'],
      ['nama_panggilan' => 'Admin Kecamatan 3', 'email' => 'adminkecamatan3@email.id'],
      ['nama_panggilan' => 'Admin Kecamatan 4', 'email' => 'adminkecamatan4@email.id'],
    ];
    foreach ($adminKecamatans as $index => $admin) {
      $user = User::create([
        'name' => $admin['nama_panggilan'],
        'email' => $admin['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Admin Kecamatan');
      AdminKecamatan::create([
        'user_id' => $user->id,
        'kecamatan_id' => $kecamatan->id,
      ]);
    }
  }
}

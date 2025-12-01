<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminProvinsi;
use App\Models\User;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminProvinsiSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Admin Provinsi')->exists()) {
      Role::create(['name' => 'Admin Provinsi']);
    }
    $provinsi = Provinsi::first();
    if (!$provinsi) {
      $provinsi = Provinsi::create([
        'nama_provinsi' => 'Provinsi A',
        'kode' => 'PROV-A',
      ]);
    }
    $adminProvinsis = [
      ['nama_panggilan' => 'Admin Provinsi 1', 'email' => 'adminprovinsi1@email.id'],
      ['nama_panggilan' => 'Admin Provinsi 2', 'email' => 'adminprovinsi2@email.id'],
      ['nama_panggilan' => 'Admin Provinsi 3', 'email' => 'adminprovinsi3@email.id'],
      ['nama_panggilan' => 'Admin Provinsi 4', 'email' => 'adminprovinsi4@email.id'],
    ];
    foreach ($adminProvinsis as $index => $admin) {
      $user = User::create([
        'name' => $admin['nama_panggilan'],
        'email' => $admin['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Admin Provinsi');
      AdminProvinsi::create([
        'user_id' => $user->id,
        'provinsi_id' => $provinsi->id,
      ]);
    }
  }
}

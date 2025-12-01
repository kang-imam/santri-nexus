<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminDesa;
use App\Models\User;
use App\Models\Desa;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminDesaSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Admin Desa')->exists()) {
      Role::create(['name' => 'Admin Desa']);
    }
    $desa = Desa::first();
    if (!$desa) {
      $desa = Desa::create([
        'nama_desa' => 'Desa A',
        'kode' => 'DESA-A',
      ]);
    }
    $adminDesas = [
      ['nama_panggilan' => 'Admin Desa 1', 'email' => 'admindesa1@email.id'],
      ['nama_panggilan' => 'Admin Desa 2', 'email' => 'admindesa2@email.id'],
      ['nama_panggilan' => 'Admin Desa 3', 'email' => 'admindesa3@email.id'],
      ['nama_panggilan' => 'Admin Desa 4', 'email' => 'admindesa4@email.id'],
    ];
    foreach ($adminDesas as $index => $admin) {
      $user = User::create([
        'name' => $admin['nama_panggilan'],
        'email' => $admin['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Admin Desa');
      AdminDesa::create([
        'user_id' => $user->id,
        'desa_id' => $desa->id,
      ]);
    }
  }
}

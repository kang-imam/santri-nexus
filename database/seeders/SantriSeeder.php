<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\User;
use App\Models\Pesantren;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SantriSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Santri')->exists()) {
      Role::create(['name' => 'Santri']);
    }
    $pesantren = Pesantren::first();
    if (!$pesantren) {
      $pesantren = Pesantren::create([
        'nama_pesantren' => 'Pesantren Al-Falah',
        'alamat' => 'Jl. Raya No. 1, Kota XYZ'
      ]);
    }
    $santris = [
      ['nama_panggilan' => 'Santri 1', 'email' => 'santri1@email.id'],
      ['nama_panggilan' => 'Santri 2', 'email' => 'santri2@email.id'],
      ['nama_panggilan' => 'Santri 3', 'email' => 'santri3@email.id'],
      ['nama_panggilan' => 'Santri 4', 'email' => 'santri4@email.id'],
    ];
    foreach ($santris as $index => $santri) {
      $user = User::create([
        'name' => $santri['nama_panggilan'],
        'email' => $santri['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Santri');
      Santri::create([
        'user_id' => $user->id,
        'nama_panggilan' => $santri['nama_panggilan'],
        'pesantren_id' => $pesantren->id,
      ]);
    }
  }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WaliSantri;
use App\Models\User;
use App\Models\Santri;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class WaliSantriSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Wali Santri')->exists()) {
      Role::create(['name' => 'Wali Santri']);
    }
    $santri = Santri::first();
    if (!$santri) {
      $santri = Santri::create([
        'user_id' => 1,
        'nama_panggilan' => 'Santri A',
        'pesantren_id' => 1,
      ]);
    }
    $user = User::create([
      'name' => 'Wali Santri 1',
      'email' => 'walisantri1@email.id',
      'password' => Hash::make('password123'),
    ]);
    $user->assignRole('Wali Santri');
    WaliSantri::create([
      'user_id' => $user->id,
      'santri_id' => $santri->id,
    ]);
  }
}

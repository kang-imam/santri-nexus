<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminPesantren;
use App\Models\User;
use App\Models\Pesantren;
use App\Models\JenisKelamin;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminPesantrenSeeder extends Seeder
{
  public function run()
  {
    if (!Role::where('name', 'Admin Pesantren')->exists()) {
      Role::create(['name' => 'Admin Pesantren']);
    }
    $pesantren = Pesantren::first();
    if (!$pesantren) {
      $pesantren = Pesantren::create([
        'nama_pesantren' => 'Pesantren Al-Falah',
        'alamat' => 'Jl. Pesantren Raya No. 1',
      ]);
    }
    $jkLaki = JenisKelamin::where('kode', 'L')->first();
    $jkPerempuan = JenisKelamin::where('kode', 'P')->first();
    $dataAdmins = [
      [
        'nama' => 'Admin Pesantren Umum',
        'email' => 'adminpesantren1@email.id',
        'jenis_kelamin_id' => null,
      ],
      [
        'nama' => 'Admin Pesantren Putra',
        'email' => 'adminpesantren2@email.id',
        'jenis_kelamin_id' => $jkLaki ? $jkLaki->id : null,
      ],
      [
        'nama' => 'Admin Pesantren Putri',
        'email' => 'adminpesantren3@email.id',
        'jenis_kelamin_id' => $jkPerempuan ? $jkPerempuan->id : null,
      ],
    ];
    foreach ($dataAdmins as $admin) {
      $user = User::create([
        'name' => $admin['nama'],
        'email' => $admin['email'],
        'password' => Hash::make('password123'),
      ]);
      $user->assignRole('Admin Pesantren');
      AdminPesantren::create([
        'user_id' => $user->id,
        'pesantren_id' => $pesantren->id,
        'jenis_kelamin_id' => $admin['jenis_kelamin_id'],
      ]);
    }
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
  protected $table = 'jenis_kelamins';
  protected $fillable = ['kode', 'nama'];
  public static function nama($kode)
  {
    $jenis = self::where('kode', $kode)->first();
    return $jenis ? $jenis->nama : null;
  }
  public function asramas()
  {
    return $this->hasMany(Asrama::class);
  }
  public function adminPesantrens()
  {
    return $this->hasMany(AdminPesantren::class);
  }
}

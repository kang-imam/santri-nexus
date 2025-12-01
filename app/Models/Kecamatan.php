<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
  protected $table = 'kecamatans';
  protected $fillable = ['nama', 'kota_id'];
  public function kota()
  {
    return $this->belongsTo(Kota::class);
  }
  public function desas()
  {
    return $this->hasMany(Desa::class);
  }
  public function adminKecamatans()
  {
    return $this->hasMany(AdminKecamatan::class);
  }
}

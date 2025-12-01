<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
  protected $table = 'kotas';
  protected $fillable = ['jenis', 'nama', 'provinsi_id'];
  public function provinsi()
  {
    return $this->belongsTo(Provinsi::class);
  }
  public function kecamatans()
  {
    return $this->hasMany(Kecamatan::class);
  }
  public function adminKotas()
  {
    return $this->hasMany(AdminKota::class);
  }
}

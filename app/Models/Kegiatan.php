<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
  protected $fillable = [
    'pesantren_id',
    'nama_kegiatan',
    'keterangan',
    'tanggal',
    'mulai',
    'selesai',
  ];
  public function pesantren()
  {
    return $this->belongsTo(Pesantren::class);
  }
  public function absensis()
  {
    return $this->hasMany(Absensi::class);
  }
}

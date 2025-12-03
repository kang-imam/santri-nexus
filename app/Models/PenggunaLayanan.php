<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenggunaLayanan extends Model
{
  protected $fillable = [
    'pesantren_id',
    'jenis_layanan_id',
    'tanggal_mulai',
    'tanggal_selesai',
    'aktif',
  ];
  public function pesantren()
  {
    return $this->belongsTo(Pesantren::class);
  }
  public function jenisLayanan()
  {
    return $this->belongsTo(JenisLayanan::class);
  }
}

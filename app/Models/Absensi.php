<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  protected $fillable = [
    'kegiatan_id',
    'santri_id',
    'status',
  ];
  public function kegiatan()
  {
    return $this->belongsTo(Kegiatan::class);
  }
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
}

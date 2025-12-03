<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuSantri extends Model
{
  protected $fillable = [
    'santri_id',
    'nomor_kartu',
    'pin',
    'status',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
}

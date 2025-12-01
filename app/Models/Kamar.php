<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
  protected $table = 'kamars';
  protected $fillable = ['nama', 'asrama_id', 'kapasitas'];
  public function asrama()
  {
    return $this->belongsTo(Asrama::class);
  }
}

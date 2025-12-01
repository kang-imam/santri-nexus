<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
  protected $table = 'asramas';
  protected $fillable = ['nama', 'pesantren_id', 'jenis_kelamin_id'];
  public function pesantren()
  {
    return $this->belongsTo(Pesantren::class);
  }
  public function jenisKelamin()
  {
    return $this->belongsTo(JenisKelamin::class);
  }
  public function kamars()
  {
    return $this->hasMany(Kamar::class);
  }
}

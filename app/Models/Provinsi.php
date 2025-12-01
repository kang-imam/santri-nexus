<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
  protected $table = 'provinsis';
  protected $fillable = ['nama'];
  public function kotas()
  {
    return $this->hasMany(Kota::class);
  }
  public function adminProvinsis()
  {
    return $this->hasMany(AdminProvinsi::class);
  }
}

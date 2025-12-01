<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model
{
  protected $table = 'pesantrens';
  protected $fillable = ['nama', 'alamat', 'desa_id'];
  public function desa()
  {
    return $this->belongsTo(Desa::class);
  }
  public function asramas()
  {
    return $this->hasMany(Asrama::class);
  }
  public function santris()
  {
    return $this->hasMany(Santri::class);
  }
  public function adminPesantrens()
  {
    return $this->hasMany(AdminPesantren::class);
  }
}

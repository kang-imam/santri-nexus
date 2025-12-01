<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
  protected $table = 'desas';
  protected $fillable = ['jenis', 'nama', 'kecamatan_id'];
  public function kecamatan()
  {
    return $this->belongsTo(Kecamatan::class);
  }
  public function pesantrens()
  {
    return $this->hasMany(Pesantren::class);
  }
  public function adminDesas()
  {
    return $this->hasMany(AdminDesa::class);
  }
}

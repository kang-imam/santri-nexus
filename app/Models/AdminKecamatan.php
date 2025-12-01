<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminKecamatan extends Model
{
  protected $table = 'admin_kecamatans';
  protected $fillable = ['user_id', 'kecamatan_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function kecamatan()
  {
    return $this->belongsTo(Kecamatan::class);
  }
}

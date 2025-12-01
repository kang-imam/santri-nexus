<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProvinsi extends Model
{
  protected $table = 'admin_provinsis';
  protected $fillable = ['user_id', 'provinsi_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function provinsi()
  {
    return $this->belongsTo(Provinsi::class);
  }
}

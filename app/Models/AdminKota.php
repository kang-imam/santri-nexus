<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminKota extends Model
{
  protected $table = 'admin_kotas';
  protected $fillable = ['user_id', 'kota_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function kota()
  {
    return $this->belongsTo(Kota::class);
  }
}

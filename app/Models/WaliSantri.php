<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
  protected $table = 'wali_santris';
  protected $fillable = ['user_id', 'santri_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
}

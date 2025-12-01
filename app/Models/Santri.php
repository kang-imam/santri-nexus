<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
  protected $table = 'santris';
  protected $fillable = ['user_id', 'nama_panggilan', 'pesantren_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function pesantren()
  {
    return $this->belongsTo(Pesantren::class);
  }
}

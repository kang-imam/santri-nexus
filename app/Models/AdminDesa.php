<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDesa extends Model
{
  protected $table = 'admin_desas';
  protected $fillable = ['user_id', 'desa_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function desa()
  {
    return $this->belongsTo(Desa::class);
  }
}

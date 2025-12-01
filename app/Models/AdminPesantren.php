<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPesantren extends Model
{
  protected $table = 'admin_pesantrens';
  protected $fillable = ['user_id', 'pesantren_id', 'jenis_kelamin_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function pesantren()
  {
    return $this->belongsTo(Pesantren::class);
  }
  public function jenisKelamin()
  {
    return $this->belongsTo(JenisKelamin::class);
  }
}

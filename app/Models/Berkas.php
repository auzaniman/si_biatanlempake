<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $table = "berkas";

    protected $fillable = [
      'user_id',
      'foto_kk',
      'foto_ktp',
      'foto_diri',
      'npwp',
      'buku_nikah',
      'akta_kelahiran',
      'paspoto',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

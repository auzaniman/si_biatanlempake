<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KeuanganModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'keuangan';

    protected $fillable = [
      'tahun_anggaran',
      'tipe_anggaran',
      'nama_anggaran',
      'jumlah_nominal',
    ];
}

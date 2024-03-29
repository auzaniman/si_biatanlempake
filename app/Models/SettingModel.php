<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'setting_officer';

    protected $fillable = [
      'sejarah_kampung',
      'video_desa',
      'img_desa',

      'kategori_tdp',
      'gambar_tdp',
      'judul_tdp',
      'desc_tdp',
    ];
}

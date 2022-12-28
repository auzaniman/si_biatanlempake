<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChartBar extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "chart_bars";
    protected $fillable = [
      "jumlahWarga",
      "jumlahKepalaKeluarga",
      "rt"
    ];

}

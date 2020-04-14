<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laporan_covid extends Model
{
    protected $table = "laporan_covid";
    protected $fillable = [
        'nama', 'nik', 'no_handphone', 'alamat', 'pesan'
    ];
    protected $hidden = [];
}

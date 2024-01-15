<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tbjadwal';

    protected $fillable = [
        'idjadwal',
        'id_user',
        'blokruang',
        'keterangan',
    ];

    public function tbuser()
    {
        return $this->belongsTo(tbuser::class);
    }
}

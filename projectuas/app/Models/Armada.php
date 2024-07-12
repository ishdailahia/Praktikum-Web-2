<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada';

    protected $fillable = [
        'foto',
        'merk',
        'nopol',
        'thn_beli',
        'deskripsi',
        'kendaraan_id',
        'kapasitas_kursi',
        'rating',
    ];

    public function Kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}

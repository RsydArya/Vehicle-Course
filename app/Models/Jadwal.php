<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'peserta_id',
        'instruktur_id',
        'tanggal',
        'waktu',
        'status',
    ];

    // relasi ke peserta
    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    // relasi ke instruktur
    public function instruktur()
    {
        return $this->belongsTo(Instruktur::class);
    }
}

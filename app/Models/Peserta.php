<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'paket',
        'status_pembayaran',
    ];

    public function jadwal()
    {
    return $this->hasMany(Jadwal::class);
    }

    
}




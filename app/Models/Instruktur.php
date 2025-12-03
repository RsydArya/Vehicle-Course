<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'nama',
        'pengalaman',
        'no_hp',
    ];

    public function jadwal()
    {
    return $this->hasMany(Jadwal::class);
    }

}

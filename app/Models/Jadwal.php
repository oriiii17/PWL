<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    use HasFactory;
    protected $table = 'jadwals';
    protected $primaryKey = 'jadwalID'; 
    // public $incrementing = true;
    // protected $keyType = 'int';
    protected $fillable = [
        'hari',
        'waktu',
        'kodeMk',
        'grup',
        'nik', 
        'ruang' 
    ];

    //Relasi ke matakuliah
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kodeMk', 'kodeMk');
    }

    //Relasi ke dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nik', 'nik');   
    }

}

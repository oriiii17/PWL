<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    //
    use HasFactory;
    protected $table = 'registrasis';
    protected $primaryKey = 'noReg';
    protected $fillable = [
        'tanggal',
        'nim',
    ];  

    //Relasi ke mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }   

    //Relasi ke krskhs
    public function krskhs()
    {
        return $this->hasMany(Krskhs::class, 'noReg', 'noReg');
    }   

    // //Relasi ke jadwal
    // public function jadwal()
    // {
    //     return $this->belongsTo(Jadwal::class, 'jadwalID', 'jadwalID');
    // }   

}

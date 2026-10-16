<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krskhs extends Model
{
    //
    use HasFactory;
    protected $table = 'krskhs';
    protected $primaryKey = 'idKrs';
    protected $fillable = [
        'noReg',
        'jadwalID',
        'nilai',
    ];
    public $timestamps = true;

    //relasi ke registrasi
    public function registrasi()
    {
        return $this->belongsTo(Registrasi::class, 'noReg', 'noReg');
    }

    //relasi ke jadwal
    public function jadwal()    
    {
        return $this->belongsTo(Jadwal::class, 'jadwalID', 'jadwalID');
    }

}

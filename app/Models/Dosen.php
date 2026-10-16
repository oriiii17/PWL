<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    use HasFactory;
    protected $table = 'dosens';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nik',
        'namaDosen',
    ];

    //relasi ke jadwal
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'nik', 'nik');
    }
}

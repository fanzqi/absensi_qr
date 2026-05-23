<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'tingkat',
        'jurusan',
        'wali_guru_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relasi Wali Guru
    |--------------------------------------------------------------------------
    */

    public function waliGuru()
    {
        return $this->belongsTo(Guru::class, 'wali_guru_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Relasi Siswa
    |--------------------------------------------------------------------------
    */

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}

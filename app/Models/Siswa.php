<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'alamat',
        'tempat',
        'tanggal_lahir',
        'kelas'
    ];

    public function orangTua()
    {
        return $this->hasMany(OrangTua::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    public function kespek()
    {
        return $this->hasMany(Kespek::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'mapel',
        'alamat',
        'no_hp',
        'tanggal_lahir',
        'pendidikan_terakhir'
    ];

    public function kelasWali()
    {
        return $this->hasMany(WaliKelas::class);
    }

    public function mataPelajaran()
    {
        return $this->hasMany(MataPelajaran::class);
    }

    public function guruBk()
    {
        return $this->hasOne(GuruBk::class);
    }
}

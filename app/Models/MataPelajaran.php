<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';

    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
        'sks',
        'guru_id'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $table = 'orang_tua';

    protected $fillable = [
        'nama',
        'hubungan',
        'pekerjaan',
        'no_hp',
        'alamat',
        'siswa_id'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}

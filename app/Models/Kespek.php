<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kespek extends Model
{
    protected $table = 'kespek';

    protected $fillable = [
        'siswa_id',
        'guru_bk_id',
        'jenis_pelanggaran',
        'keterangan',
        'poin',
        'tindakan',
        'tanggal',
        'status'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function guruBk()
    {
        return $this->belongsTo(GuruBk::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruBk extends Model
{
    protected $table = 'guru_bk';

    protected $fillable = [
        'guru_id',
        'nip',
        'nama',
        'no_hp',
        'alamat',
        'spesialisasi'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kespek()
    {
        return $this->hasMany(Kespek::class);
    }
}
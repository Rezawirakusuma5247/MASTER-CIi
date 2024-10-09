<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RezaWirakusuma extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nidn',
        'nama_dosen',
        'tgl_mulai_tugas',
        'jenjang_pendidikan',
        'bidang_keilmuan',
        'foto_dosen',
    ];

}

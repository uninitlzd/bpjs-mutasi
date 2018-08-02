<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = ['id'];

    public static $codes = [
        1 => 'IDENTITAS',
        2 => 'ALAMAT',
        3 => 'GAJI',
        5 => 'NON AKTIF AKHIR BULAN',
        6 => 'NON AKTIF MENINGGAL',
        8 => 'PINDAH SATUAN KERJA',
        9 => 'NIP',
        991 => 'DATA BARU',
        992 => 'PINDAH FASKES',
        993 => 'TAMBAH ANGGOTA KELUARGA'
    ];

    public const ON_PROGRESS = 1;
    public const APPROVED = 2;
    public const REJECTED = 3;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

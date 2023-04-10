<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    use HasFactory;
    protected $table = 'penyewaan';

    protected $fillable = [
        'users_id',
        'mobils_id',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_harga',
        'bukti_pembayaran',
        'konfirmasis_id',
    ];
}

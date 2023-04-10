<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table = 'penyewaans';

    protected $fillable = [
        'user_id',
        'mobil_id',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_harga',
        'bukti_pembayaran',
        'konfirmasi_id',
    ];
}

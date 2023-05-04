<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    use HasFactory;

    protected $table = 'konfirmasis';
    protected $fillable = [
        'konfirmasi',
    ];

    public function penyewaans()
    {
        return $this->hasMany(Penyewaan::class, 'konfirmasi_id');
    }
}

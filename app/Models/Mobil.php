<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobils';
    protected $guarded = ['id'];

    public function statuses()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function penyewaans()
    {
        return $this->hasMany(Penyewaan::class, 'mobil_id');
    }
}

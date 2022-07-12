<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = "tbtransaksi";
    public $timestamps = false;

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function stok()
    {
        return $this->belongsTo(Stok::class);
    }
    public function akun()
    {
        return $this->belongsTo(Akun::class);
    }
}

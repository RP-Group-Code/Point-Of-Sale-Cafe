<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = "tbakun";
    public $timestamps = false;

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}

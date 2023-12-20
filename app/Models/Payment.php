<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "pembayaran";
    protected $primaryKey = "id_pembayaran";
    protected $fillable = [
        "total_pembayaran",
        "waktu_pembayaran",
        "metode_pembayaran"
    ];
}

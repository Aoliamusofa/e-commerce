<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanan";
    protected $primaryKey = "id_pesanan";
    protected $fillable = [
        "id_produk",
        "user_id",
        "id_expedisi",
        "jumlah_pesanan",
        "tanggal_pesanan",
        "tinggalkan_pesan"
    ];
}

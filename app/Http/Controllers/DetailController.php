<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function DetailProduk($id)
    {
        $data = Produk::with('JoinToKategoriProduk')->findOrFail($id);
        // $data->id_produk = $id;
        // dd($data);
        return view('detail', [
            'title' => 'detail produk',
            'data' => $data,
        ]);
    }
}

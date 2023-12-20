<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function GetAllProduk()
    {
        $data = Produk::all();
        return view('produk', [
            'title' => 'produk',
            'data' => $data
        ]);
    }
    public function AddProduk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_produk' => 'required',
            'id_kat_produk' => 'required',
            'nama_produk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'bahan' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'size' => 'required',
            'foto_produk' => 'required|image|mimes:png,svg|max:5000'

        ]);
        try {
            if (!$validator->fails()) {
                $getFile = $request->file('foto_produk');
                $getFileName = $getFile->hashName();
                $direktory = "/foto_produk/$getFileName";
                $request->foto_produk->move(public_path('/foto_produk/'), $getFileName);
            }
            $data = new Produk([
                'id_produk' => $request->id_produk,
                'id_kat_produk' => $request->id_kat_produk,
                'nama_produk' => $request->nama_produk,
                'harga_barang' => $request->harga_barang,
                'stok_barang' => $request->stok_barang,
                'bahan' => $request->bahan,
                'deskripsi' => $request->deskripsi,
                'warna' => $request->warna,
                'size' => $request->size,
                'foto_ptoduk' => $direktory
            ]);
            $data->save();
            return redirect('/produk')->with('success', 'data berhasil disimpan');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect('/produk')->with('message', 'gagal di tambahkan');
        }
    }
    public function UpdateProduk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_produk' => 'required',
            'id_kat_produk' => 'required',
            'nama_produk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'bahan' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'size' => 'required',
            'foto_produk' => 'required|image|mimes:png,svg|max:5000'

        ]);
    }
    public function DeleteProduk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_produk' => 'required',
            'id_kat_produk' => 'required',
            'nama_produk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'bahan' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'size' => 'required',
            'foto_produk' => 'required|image|mimes:png,svg|max:5000'

        ]);
    }
}

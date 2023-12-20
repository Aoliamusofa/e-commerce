<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{

    public function GetAllPesanan()
    {
        $data = Pesanan::all();
        return view('pesanan', [
            'title' => 'pesanan',
            'data' => $data
        ]);
    }
    public function AddPesanan(Request $request)
    {
    }
    public function UpdatePesanan(Request $request)
    {
    }
    public function DeletePesanan($id)
    {
    }
}

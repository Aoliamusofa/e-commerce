<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DataDashboard()
    {
        $data = Produk::all()->count();
        // dd($data);
        return view('dashboard', [
            'title' => 'dashboard',
            'data' => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function GetAllPayment()
    {
        $data = Payment::all();
        return view('payment', [
            'title' => 'payment',
            'data' => $data
        ]);
    }
    public function AddPayment(Request $request)
    {
    }
    public function UpdatePayment(Request $request)
    {
    }
    public function DeletePayment($id)
    {
    }
}

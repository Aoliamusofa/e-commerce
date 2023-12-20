<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetAllUser()
    {
        $data = User::all();
        return view('user', [
            'title' => 'pelanggan',
            'data' => $data
        ]);
    }
    public function AddUser(Request $request)
    {
    }
    public function UpdateUser(Request $request)
    {
    }
    public function DeleteUser($id)
    {
    }
}

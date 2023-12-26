<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function LoginView()
    {
        return view('auth.login', ['title' => 'login']);
    }
    public function LoginAuth(Request $request)
    {
        dd($request);
        Validator::make(
            $request->all(),
            [
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
            ]
        );
    }


    public function RegisterView()
    {
        return view('auth.register', ['title' => 'register']);
    }
    public function RegisterPost(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
                'jk' => 'required',
                'tlp' => 'required',
                'alamat' => 'required'
            ]
        );
        // dd($validator);
        try {
            $data = new User([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make('password'),
                'jk' => $request->jk,
                'tlp' => $request->tlp,
                'alamat' => $request->alamat
            ]);
            $data->save();
            return redirect('/login')->with('success', 'register berhasil');
        } catch (\Throwable $th) {
            return redirect('/register')->with('errors', 'akun gagal di tambahkan');
        }
    }
}

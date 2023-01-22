<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('admin.login.login');
    }
    
    public function doLogin(Request $request) {

        $validate = Validator::make($request->all(), [
            'email'    => 'required|email|exists:users',
            'password' => 'required'
        ], [
            'email.required'    => 'E-mail alanı zorunludur.',
            'email.email'       => 'E-mail alanı geçerli formatta olmalıdır.',
            'email.exists'      => 'E-mail sistemde kayıtlı olmalıdır.',
            'password.required' => 'Şifre alanı zorunludur.'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', 'E-mail sistemde kayıtlı olmalıdır.');
        }

        $data = [
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(auth()->attempt($data)){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Kullanıcı adı veya şifre hatalı!');
    }

    public function logout() {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}

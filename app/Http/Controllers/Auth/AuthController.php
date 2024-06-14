<?php

namespace App\Http\Controllers\Auth;

use App\AuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    // login
    public function login(){
        return view('Auth.login');
    }
    // dologin
    public function doLogin(AuthRequest $request, AuthService $credential){
        $result = $this->authService->doLoginService($request, $credential);
        if ($result == true) {
            return 'Login Berhasil';
        }else{
            return 'Login Gagal';
        }
    }
    // register user
    public function register(){
        return view('Auth.register');
    }
    // doRegister
    public function doRegister(Request $request){
        $request->validate([
            "name" => "required",
            "username" => "required",
            "email" => "required|email",
            "password" => "required|min:4",
        ]);
        // dd($request);
        // insert data to db
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('login');
    }
}

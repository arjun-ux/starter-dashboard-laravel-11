<?php

namespace App;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    // dologin
    public function doLoginService(AuthRequest $request){
        $credential = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);
        if ($credential) {
            if (Auth::attempt($credential)) {
                $request->session()->regenerate();
                $request->session()->regenerateToken();
                return true;
            }else{
                return false;
            }
        }
    }
}

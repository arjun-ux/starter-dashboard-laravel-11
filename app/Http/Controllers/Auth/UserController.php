<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //index
    public function index(){
        $user = User::all(["name", "username", "email"]);
        return view('user.index', compact('user'));
    }
}

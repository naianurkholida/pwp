<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function login(Request $request){
        $login = $request->validate([
            'username'=> 'required',
            'password'=> 'required'
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->with('loginError', 'login failed');
        // $user = User::where('username', $login['username'])->first();
        //     if(Hash::check($login['password'], $user->password)){
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'login sukses');
        //     }
        //     return dd('gagal');
    }
}

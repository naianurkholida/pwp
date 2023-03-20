<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            $user = User::where('username', $request['username'])->first();
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'sukses login');
            // return dd(auth()->user()->username);
        }
        // return dd($request->password);
        return back()->with('error', 'Login gagal gais');
    }
}

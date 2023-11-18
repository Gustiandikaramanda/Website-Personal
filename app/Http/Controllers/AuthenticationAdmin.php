<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationAdmin extends Controller
{
    public function login() {
        return view('login');
    }
    public function loginAdmin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:16'
        ]);
        $user = User::where('username','=',$request->username)->first();
        if ($user) {
            if ($request->password == $user->password) {
                $request->session()->put('loginID',$user->id);
                return redirect('/dashboard');
            }else {
                return back()->with('fail','You entred a wrong password');
            }
        }else {
            return back()->with('fail','The username you entered does not exist');
        }
    }
    public function logout() {
        if (session()->has('loginID')) {
            session()->pull('loginID');
            return redirect('/login');
        }
    }
}

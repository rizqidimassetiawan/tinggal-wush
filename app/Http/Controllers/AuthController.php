<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index',['title' => 'Login']);
    }
    
    public function authentication(Request $request)
    {    
        $credential = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $level = auth()->user()->level;
            $request->session()->regenerate();
            if ($level == 'super')
            {
                return redirect(route('dashboard'));
            }
            return redirect(route('default'));
        }

        return back()->with('toast_error', 'wrong username or password');
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');   
    }
}
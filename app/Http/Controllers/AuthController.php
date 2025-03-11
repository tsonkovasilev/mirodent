<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }
    
    public function showLogin() {
        return view('auth.login');
    }
    
    public function register(Request $request) {
        $data = $request->validate([
            'name'=>'string|required|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'string|required|min:6|confirmed|',
        ]);
        
        $user = User::create($data);
        
        Auth::login($user);

        return redirect()->route('orders.index');
    }
    
    public function login(Request $request) {
        $data = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);
        
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route("orders.index");
        }
        
        throw ValidationException::withMessages([
            'credentials'=>'Login failed.',
        ]);
    }
    
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('show.login');
    }
    
    
}

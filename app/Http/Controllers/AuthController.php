<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    
    public function register(Request $request) {
        return view('bukan_admin/register');
    }

    public function login(Request $request) {
        return view('bukan_admin/login');
    }

    public function doRegister(Request $request) {
        // kita lakukan validasi request/inputan
        $request->validate([
            'name' => ['required','string', 'max:100'],
            'email' => ['required','string', 'max:100', 'email', 'unique:'.User::class],
            'phone_number' => ['required', 'string', 'max:12'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request ->phone_number,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required','string', 'max:100', 'email'],
            'phone_number' => ['required', 'string', 'max:12'],
            'password' => ['required', Rules\Password::defaults()]
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        // return back()->withErrors([
        //     'email' => 'Email and password invalid.',
        //     'phone_number' => 'Invalid phone number.',
        // ])->onlyInput('email', 'phone_number');
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}

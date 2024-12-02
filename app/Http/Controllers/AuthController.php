<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view("layout.login");
    }


    public function signup(Request $request)
    {
        return view("layout.signup");
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function sign_up(Request $request)
    {
        $this->validator($request->all());

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $user = User::where('email', $request['email'])->firstOrFail();
        Auth::login($user);
        session()->flash('success_message', 'Votre compte a été crée');

        return redirect('/login')->with('success', 'Inscription réussie !');

    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

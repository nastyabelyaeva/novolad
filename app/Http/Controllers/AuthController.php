<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function regForm() {
        return view('registration');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => ['regex:/^[А-ЯЁа-яё -]+$/u', 'required'],
            'surname' => ['regex:/^[А-ЯЁа-яё -]+$/u', 'required'],
            'lastname' => ['regex:/^[А-ЯЁа-яё -]*$/u', 'nullable'],
            'login' => ['regex:/^[A-Za-z0-9-]+$/u', 'required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->lastname = $request->lastname;
        $user->login = $request->login;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->birthdate = $request->birthdate;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }
    public function loginForm() {
        return view('login');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::check() && Auth::user()->is_admin) {
                return redirect()->route('admin')->with(['info'=>'Вы успешно вошли в панель администратора']);
            } else {
                return redirect('/')->with(['info'=>'Вы успешно вошли']);
            }
        }

        return back()->withErrors([
            'login'=>'Не совпали данные',
        ])->onlyInput('login');
    }
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

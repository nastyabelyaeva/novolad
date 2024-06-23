<?php

namespace App\Http\Controllers;
use App\Models\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function edit()
    {
        $user = Auth::user();
        return view('profile_edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {

        // Валидация данных формы
            $request->validate([
                'name' => ['regex:/^[А-ЯЁа-яё -]+$/u', 'required'],
                'surname' => ['regex:/^[А-ЯЁа-яё -]+$/u', 'required'],
                'lastname' => ['regex:/^[А-ЯЁа-яё -]*$/u', 'nullable'],
                'email' => ['required'],
                'password' => ['required', 'confirmed', 'min:6'],
        ]);

        // Обновление данных пользователя
        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = bcrypt($request->password);
        $user->save();

        // Перенаправление на страницу профиля
        return redirect()->route('profile')->with('success', 'Профиль успешно обновлен.');
    }
}


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $remember_me = $request->input('remember', null);

        if (Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended('/main');
        }

        throw ValidationException::withMessages([
            'password' => __('auth.password'),
        ]);
    }
}

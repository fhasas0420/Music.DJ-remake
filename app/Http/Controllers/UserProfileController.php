<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Mockery\Undefined;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return response()->json([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'birthday' => $user->birthday,
            'pronouns' => $user->pronouns,
            'two_factor_secret' => $user->two_factor_secret
        ]);
    }

    public function twoFactorStatus(Request $request)
    {
        $user = $request->user();

        if(empty($user->two_factor_secret)) {
            $twoFactorEnabled = false;
        } else {
            $twoFactorEnabled = true;
        }

        return response()->json([
            'two_factor_enabled' => $twoFactorEnabled
        ]);
    }
}

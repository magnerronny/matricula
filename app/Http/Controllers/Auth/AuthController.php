<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login() {
        //$user = User::all();
        $user = [ 'dsd', 'dsds'];
        return Inertia::render('Login', [
            'users' => $user,
        ]);
    }

    public function signIn (Request $request) {
        
        $user = $request->email;

        return back()->withErrors(['asda' => $user ]);
    }
}

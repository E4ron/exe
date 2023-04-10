<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'name' => 'required|exists:users|alpha_dash',
            'password' => 'required|min:6'
        ]);

        $user = User::where([
            'name'=> $request->name,])->first();

                if (!$user) return response()->json([
                    'errors' => [
                        'password' => ['Неверный логин или пароль']
                    ]
                ], 422);


                Auth::login($user, true);

        
                return redirect()->route('home');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required|alpha_dash',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:6',
            'password_repeat' => 'required|same:password',
        ]);
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        Auth::login($user, true);

        return redirect()->route('home');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}

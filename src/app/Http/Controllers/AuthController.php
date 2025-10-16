<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function showLoginForm()
    {
      return view('auth.login');
    }

  public function login(LoginRequest $request)
    {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials, $request->filled('remember'))) {
          $request->session()->regenerate();
          return redirect()->intended('/');
      }

      return back();
    }

  public function showRegisterForm()
    {
      return view('auth.register');
    }

    
    public function register(RegisterRequest $request)
    {
      $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);

      Auth::login($user);

      return redirect()->route('thanks');
    }

    public function logout(Request $request)
    {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/');
    }

}
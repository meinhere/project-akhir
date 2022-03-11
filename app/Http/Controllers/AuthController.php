<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login()
  {
    $data = [
      "title" => "JagoKebun . Halaman Login",
      'footers' => Footer::all()
    ];
    return view('auth.login', $data);
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      if (auth()->user()->role != 'User') {
        return redirect()->intended('/dashboard');
      } else {
        return redirect()->intended('/');
      }
    }

    return back()->with('failed', 'Login gagal, coba kembali');
  }

  public function register()
  {
    $data = [
      "title" => "JagoKebun . Halaman Daftar",
      'footers' => Footer::all()
    ];
    return view('auth.register', $data);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'username' => 'required|max:255|min:3|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:5|max:255',
    ]);

    $validatedData['password'] = bcrypt($validatedData['password']);
    User::create($validatedData);

    return redirect('/login')->with('success', 'Registrasi berhasill, silahkan login');
  }

  public function registerPetani()
  {
    $data = [
      "title" => "JagoKebun . Halaman Daftar Petani"
    ];
    return view('auth.registerPetani', $data);
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}

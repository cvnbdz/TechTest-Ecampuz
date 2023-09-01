<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function auth()
  {
    $username = request('username');
    $password = request('password');
    if (Auth::attempt(['username' => $username, 'password' => $password])) {
      dd('login sukses!');
      // return redirect()->route('instansi.index');
    }
    dd('autentikasi gagal');
    // return redirect()->route('login.index');
  }
}

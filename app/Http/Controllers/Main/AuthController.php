<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public
    function auth()
    {
        $path = session('path') ?? '/';
        return view('main.auth', ['path' => $path]);
    }

    public
    function check(Request $request)
    {
        $login = $request->all()['login'] ?? '';
        $password = $request->all()['password'] ?? '';
        $path = $request->all()['path'] ?? null;
        if (md5($login) === env('ADMIN_LOGIN') &&
            md5($password) === env('ADMIN_PASSWORD') &&
            $path !== null)
        {
            $request->session()->put(['password' => $password, 'login' => $login]);
            return redirect($path);
        } else
        {
            return back()->with(['err' => true]);
        }
    }
}

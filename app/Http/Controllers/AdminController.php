<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->email === 'iamustapha2003@gmail.com')
            return view('admin.dashboard', [
                'users' => User::all()
            ]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function verify(Request $request)
    {
        try {

            if ($request->email != 'iamustapha2003@gmail.com') {
                return redirect('/');
            }

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials, true)) {
                $request->session()->regenerate();

                return redirect()->intended('/admin/dashboard');
            }

            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        } catch (Exception $e) {
            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
}

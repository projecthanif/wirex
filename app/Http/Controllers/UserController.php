<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.signup');
    }

    /**
     * Store a newly created user in database.
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);
        $validated['token'] = rand(000000, 999999);
        $validated['user_id'] = uuid_create();

        $user = User::create($validated);

        $mail = Mail::to($validated['email'])->send(new VerifyEmail($validated['token']));
        if ($mail) {
            cookie()->queue(cookie()->forever('email', $validated['email']));
            return redirect('/verify')->with([
                'message', 'User Registered Succefully'
            ]);
        }
        dd($mail);
    }

    public function verifyPage()
    {
        return view('users.verify', [
            'email' => request()->cookie('email'),
        ]);
    }

    public function verify(Request $request)
    {
        $token = $request->validate([
            'token' => ['min:6', 'max:6']
        ]);
        $user = User::where('email', request()->cookie('email'))->first();
        $user_token = $user->token;

        $current_date =  date('Y-m-d h:i:s');
        $new_token = rand(000000, 999999);

        if ($token['token'] != $user_token) {
            session()->flash('error', 'token is wrong');
        }

        User::where('user_id', $user->user_id)->update(['email_verified_at' => $current_date]);
        User::where('user_id', $user->user_id)->update(['token' => $new_token]);
        return redirect('/login')->with('message', 'Login');
    }

    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user->email_verified_at === null) {
            return redirect('/verify')->with(['message' => 'Verify you email first']);
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Display the specified resource.
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // dd($request->session()->regenerateToken());

        return redirect('/')->with('message', 'You have been logged out!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.forget');
    }

    /**
     * Update the specified resource in storage.
     */
    public function sendResetMail(Request $request, User $user)
    {
        $validated = $request->validate([
            'email' => ['required', 'email']
        ]);
        $token = $user->where('email', $validated['email'])->first()->token;

        $mail = Mail::to($validated['email'])->send(new VerifyEmail($token));

        redirect(route('forget.reset'))->session()->flash('message', 'reset password');
    }

    public function resetPage()
    {
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

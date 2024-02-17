<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

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
        // auth()->login($user);

        return redirect('/verify')->with('message', 'User Registered succefully, Verify your email');
    }

    public function verify(Request $request)
    {
        $token = $request->validate([
            'token' => ['min:6', 'max:6']
        ]);
        $user_token = auth()->user()->token;

        if ($token === $token) {
        }
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
        $formField = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        
        dd(auth()->attempt($formField));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

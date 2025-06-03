<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration page.
     */
    public function create(): Response
    {
        return Inertia::render('auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'First name' => 'required|string|max:255',
            'Last name' => 'required|string|max:255',

            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'Address' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'State' => 'required|string|max:255',
            'Zip' => 'required|string|max:10',

        ]);

        $user = User::create([
            'First name' => $request->Firstname,
            'Last name' => $request->Lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'Address' => $request->Address,
            'City' => $request->City,
            'State' => $request->State,
            'Zip' => $request->Zip,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return to_route('Login')->with('status', 'Registration successful! You are now logged in.');
    }
}

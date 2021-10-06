<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function register(): View
    {
        $genders = Gender::all();

        return view('authentication.register')->with('genders', $genders);
    }

    /**
     * @return View
     */
    public function login(): View
    {
        return view('authentication.login');
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/')->with('success', 'See you next time!');
    }

    /**
     * @throws ValidationException
     *
     * @return RedirectResponse
     */
    public function authenticate(): RedirectResponse
    {
        $attributes = request()->validate([
            'email' => ['required', 'max:191', 'email', Rule::exists('users', 'email')],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'Glad to have you back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.',
        ]);
    }
}

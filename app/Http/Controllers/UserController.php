<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('profile')->with('user', $user);
    }

    /**
     * Gets the attributes from the view on the POST request route.
     * It will save the data in the corresponding arrays to the tables
     * and finally save these.
     *
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        $userAttributes = request()->validate([
            'first_name' => ['required', 'max:191'],
            'last_name' => ['required', 'max:191'],
            'password' => ['required', 'confirmed', 'min:7'],
            'date_of_birth' => ['required'],
            'gender_id' => ['required', 'integer', 'between:1,3'],
            'email' => ['required', 'max:191', 'email', Rule::unique('users', 'email')],
        ]);

        $addressAttributes = request()->validate([
            'street' => ['required', 'max:191'],
            'zip_code' => ['required', 'max:191'],
            'city' => ['required', 'max:191'],
            'street_number' => ['required'],
        ]);

        $image = request()->file('profile_picture');

        $userAttributes['profile_picture'] = $image->storePubliclyAs('/public/users/', $image->hashName());

        $addressAttributes['country_code'] = 'DE';
        $address = Address::create($addressAttributes);
        $address->save();

        $userAttributes['address_id'] = $address->id;
        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect('/gardens')->with('success', 'The Account has been created. Thank you!');
    }
}

<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
}

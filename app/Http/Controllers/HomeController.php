<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('home')->with('gardens', Garden::take(5)->get());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use Illuminate\Contracts\Support\Renderable;

class GardenController extends Controller
{
    /**
     * Create the gardens list with all the gardens as properties.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('gardens-list')->with('gardens', Garden::all());
    }
}

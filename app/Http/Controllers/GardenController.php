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

    /**
     * Create garden details with a garden a parameter.
     *
     * @param Garden $garden
     * @return Renderable
     */
    public function show(Garden $garden): Renderable
    {
        return view('garden-details')->with('garden', $garden);
    }
}

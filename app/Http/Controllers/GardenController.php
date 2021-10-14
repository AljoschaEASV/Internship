<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use App\Models\Address;
use App\Models\Amenity;
use Illuminate\View\View;
use App\Models\TentType;
use Illuminate\Http\RedirectResponse;
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
     * @param Garden $garden
     * @return View
     */
    public function create(): View
    {
        $tentTypes = TentType::all();
        $amenities = Amenity::all();

        return view('garden-creation')->with('tentTypes', $tentTypes)->with('amenities', $amenities);
    }

    /**
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        $addressAttributes = request()->validate([
            'street' => ['required', 'max:191'],
            'zip_code' => ['required', 'max:191'],
            'city' => ['required', 'max:191'],
            'street_number' => ['required', 'string'],
            'image' => ['required'],
            'country_code' => ['required'],
        ]);

        $address = Address::create($addressAttributes);
        $address->save();

        $gardenAttributes = request()->validate([
            'title' => ['required', 'max:191'],
            'subtitle' => ['required', 'max:191'],
            'tent_types' => ['required'],
            'amenities' => ['required'],
        ]);

        $image = request()->file('image');
        if (isset($image)) {
            $gardenAttributes['image'] = $image->storePubliclyAs('/public/gardens', $image->hashName());
        }

        $gardenAttributes['address_id'] = $address->id;
        $gardenAttributes['user_id'] = request()->user()->id;

        $garden = Garden::create($gardenAttributes);
        $garden->save();

        foreach (request()->tent_types as $tentType) {
            $garden->tentTypes()->attach($tentType);
        }

        foreach (request()->amenities as $amenity) {
            $garden->amenities()->attach($amenity);
        }

        return redirect('/gardens')->with('success', 'The Garden was created.');
    }

    /**
     * @param Garden $garden
     * @return View
     */
    public function show(Garden $garden): View
    {
        return view('garden-details')->with('garden', $garden);
    }
}

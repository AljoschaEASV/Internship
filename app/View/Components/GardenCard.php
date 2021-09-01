<?php

namespace App\View\Components;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\Component;

class GardenCard extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return Factory
     */
    public function render(): Factory
    {
        return view('components.garden-card');
    }
}

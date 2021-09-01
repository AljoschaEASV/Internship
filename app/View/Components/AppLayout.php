<?php

namespace App\View\Components;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return Factory
     */
    public function render(): Factory
    {
        return view('components.app');
    }
}

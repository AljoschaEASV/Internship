<?php

namespace App\View\Components;

use App\Models\Garden;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\View\Component;

class Gardens extends Component
{
    /**
     * @var array
     */
    public $gardens;

    /**
     * Create the component instance.
     *
     * @param Collection $gardens
     * @return void
     */
    public function __construct(Collection $gardens)
    {
        $this->gardens = $gardens;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.gardens');
    }
}

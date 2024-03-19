<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClinicMap extends Component
{
    public $apiKey;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->apiKey = env('GOOGLE_MAPS_API_KEY');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.clinic-map');
    }
}

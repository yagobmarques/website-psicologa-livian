<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Services extends Component
{
    /**
     * Os serviços oferecidos pela psicóloga.
     *
     * @var array
     */
    public $services;

    /**
     * Create a new component instance.
     */
    public function __construct($services)
    {
        $this->services = $services;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services');
    }
}

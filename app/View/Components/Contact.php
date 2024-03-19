<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contact extends Component
{
    public $apiwpp;
    /**
     * Create a new component instance.
     */
    public function __construct($apiwpp)
    {
        $this->apiwpp = $apiwpp;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact');
    }
}

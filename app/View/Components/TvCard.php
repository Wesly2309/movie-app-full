<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TvCard extends Component
{
    public $tvshow;

    /**
     * Create a new component instance.
     */
    public function __construct($tvshow)
    {
        $this->tvshow = $tvshow;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('components.tv-card');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VerticalSingleMenu extends Component
{

    public $href;

    public $active;
        
    public $icon;



    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $href, $active, String$icon)
    {
        $this->href = $href;
        $this->active = $active;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vertical-single-menu');
    }
}

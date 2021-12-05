<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListAE extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items;
    public $route ;
    public function __construct($items, $route)
    {
        $this->items = $items;
        $this->route = $route.".show";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.list-a-e');
    }
}

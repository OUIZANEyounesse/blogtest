<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowAE extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $item;
    public function __construct($item)
    {
        $this->item=$item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.show-a-e');
    }
}

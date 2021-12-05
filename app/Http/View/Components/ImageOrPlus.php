<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageOrPlus extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nbImage;
    public $images;
    public function __construct($images)
    {

        $this->images = $images;
        $this->nbImage = count($this->images);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.image-or-plus');
    }
}

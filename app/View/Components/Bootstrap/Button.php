<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class Button extends Component
{
    public $type, $class, $i, $id, $title;

    public function __construct($class, $id, $title)
    {
        $this->class = $class;
        $this->id = $id;
        $this->title = $title;

    }

    
    public function render()
    {
        return view('components.bootstrap.button');
    }
}

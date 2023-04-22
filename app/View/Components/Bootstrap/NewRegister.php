<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class NewRegister extends Component
{
    public $color, $id, $titulo;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function render()
    {
        return view('components.bootstrap.new-register');
    }
}

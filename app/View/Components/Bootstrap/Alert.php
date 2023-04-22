<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color, $id, $texto, $icon, $display;

    public function __construct($color, $id, $texto, $icon)
    {
        $this->color = $color;
        $this->id = $id;
        $this->texto = $texto;
        $this->icon = $icon;

    }

    public function render()
    {
        return view('components.bootstrap.alert');
    }
}

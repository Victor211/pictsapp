<?php

namespace App\View\Components\Select;

use Illuminate\View\Component;

class Selectv2 extends Component
{
    public $class, $for, $id, $name, $title, $option;

    public function __construct( $class, $for, $id, $name, $title)
    {
        $this->class = $class;
        $this->for = $for;
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;

    }

    public function render()
    {
        return view('components.select.select-v2');
    }
}

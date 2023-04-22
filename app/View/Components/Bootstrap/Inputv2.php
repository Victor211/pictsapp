<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class Inputv2 extends Component
{

    public $type, $class, $for, $id, $name, $title, $button, $hidden, $disabled;

    public function __construct( $type, $class, $for, $id, $name, $title)
    {
        $this->type = $type;
        $this->class = $class;
        $this->for = $for;
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;

    }

    public function render()
    {
        return view('components.bootstrap.input-v2');
    }
}

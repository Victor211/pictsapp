<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class TabNavLi extends Component
{
    public $href, $class, $id, $title;
    public function __construct($href, $id, $title)
    {
        $this->href = $href;
        $this->id = $id;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.bootstrap.tab-nav-li');
    }
}

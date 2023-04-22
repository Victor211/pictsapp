<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class Tab extends Component
{
    public $navli;
    
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.bootstrap.tab');
    }
}

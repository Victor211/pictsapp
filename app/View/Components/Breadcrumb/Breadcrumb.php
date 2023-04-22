<?php

namespace App\View\Components\Breadcrumb;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $title, $item, $pagetitle;
    public function __construct()
    {

        
    }

    public function render()
    {
        return view('components.breadcrumb.breadcrumb');
    }
}

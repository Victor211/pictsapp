<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{

    public $id, $body, $footer;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('components.table.table');
    }
}

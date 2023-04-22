<?php

namespace App\View\Components\Message;

use Illuminate\View\Component;

class Feedback extends Component
{

    public $id;
    public function __construct($id)
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message.feedback');
    }
}

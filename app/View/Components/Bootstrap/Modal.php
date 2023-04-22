<?php

namespace App\View\Components\Bootstrap;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id, $tamanho, $titulo, $footer;

    public function __construct($id, $tamanho, $titulo)
    {
        $this->id = $id;
        $this->tamanho = $tamanho;
        $this->titulo = $titulo;
    }

    public function render()
    {
        return view('components.bootstrap.modal');
    }
}

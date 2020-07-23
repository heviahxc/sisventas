<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardCategoria extends Component
{
    
    public $nombre;
    public $id;

    public function __construct($nombre, $id)
    {
        $this->nombre = $nombre;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-categoria');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $nombre;
    public $precio;
    public $stock;
    public $id;
    public $idcategoria;
    public $categorias;
     
    public function __construct($nombre, $precio, $stock, $id, $idcategoria, $categorias)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->id = $id;
        $this->idcategoria = $idcategoria;
        $this->categorias = $categorias;



    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}

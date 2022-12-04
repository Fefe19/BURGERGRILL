<?php

class Pedido{
    protected $producto;
    protected $cantidad = 1;

    
    public function __construct($producto){
        $this->producto = $producto;
    }

    /**
     * Get the value of pizza
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set the value of pizza
     */
    public function setProducto($producto): self
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad($cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}

?>
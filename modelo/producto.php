<?php

class Producto{
    
    protected $id_producto;
    protected $nombre;
    protected $precio;
    protected $img;

    public function __construct($id_producto,$nombre,$precio,$img){
        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->img = $img;
    }

    /**
     * Get the value of nombre
     */
    public function getid()
    {
        return $this->id_producto;
    }

    /*public abstract function calculaPrecio($a=1);

    /**
     * Set the value of nombre
     */
    public function setid($id_producto): self
    {
        $this->id_producto = $id_producto;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    }

?>
<?php

class Bebida extends Producto{


    public function __construct($id,$nombre,$precio,$img){
        Parent::__construct($id,$nombre,$precio,$img);
    }

    public function calculaPrecio($a=1){

            $precioTotal = $this->getPrecio() * $a;
    
            return $precioTotal;
        }

}

?>
<?php

include 'producto.php';

class Entrante extends Producto{


    public function __construct(){
        
    }

    public function calculaPrecio($a=1){

            $precioTotal = $this->getPrecio() * $a;
    
            return $precioTotal;
        }

}

?>
<?php



class Hamburguesa extends Producto{


    public function __construct(){
    }

    public function calculaPrecio($a=1){

            $precioTotal = $this->getPrecio() * $a;
    
            return $precioTotal;
        }

}

?>
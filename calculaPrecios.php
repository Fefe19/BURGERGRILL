<?php

Class calculaPrecios{

    public static function calculaPrecioTotal($pedidos){
        $precioTotal = 0;
        foreach ($pedidos as $pedido){
            $precioUnitario = $pedido->getProducto()->calculaPrecio($pedido->getCantidad());
            $precioTotal += $precioUnitario;
        }
        return $precioTotal;
    }
}

?>
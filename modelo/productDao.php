<?php

    include_once 'entrante.php';
    include_once 'utils/dataBase.php';

    class PRODUCTDAO{

        public static function getAllByType($categoria){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM producto WHERE id_categoria=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $categoria);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $LlistaEn = [];
            while($burgerDB = $result->fetch_object("Entrante")){

                $LlistaEn[] = $burgerDB;

            }

            return $LlistaEn;

            $con->close();

        }

        public static function getAll(){
            $LlistaEn = productDao::getAllbyType("entrante");
            $LlistaHam = productDao::getAllbyType("hamburguesa");
            $LlistaPo = productDao::getAllbyType("postres");
            $LlistaBe = productDao::getAllbyType("bebida");

            $LlistaAll = array_merge($LlistaEn, $LlistaHam,$LlistaPo,$LlistaBe);
            return $LlistaAll;

        }

        public static function getById($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM producto WHERE id_producto=? ");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i",$id);

            //Execute statement
            $stmt->execute();
            $result=$stmt->get_result();
            $burgerDB = '';
            
            $burgerDB = $result->fetch_object("entrante");

            return $burgerDB;
            
            $con->close();
        }

        public static function getByName($nombre,$categoria){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM product WHERE nombre=? and tipo=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $name, $categoria);

            //Execute statement
            $stmt->execute();
            $result=$stmt->get_result();
            $burgerDB = '';
            if ($categoria == '1'){

                $burgerDB = $result->fetch_object("Entrante");
            }else{

            }
            return $burgerDB;

        }

        public static function addProducto($precio,$nombre,$categoria,$img){
            $con = DataBase::connect();
            $stmt = $con->prepare("INSERT INTO producto (precio,nombre,id_categoria,img) VALUES (?,?,?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("dsis",$precio,$nombre,$categoria,$img);
            //Execute statement
            $stmt->execute();

            $con->close();
            
        }

        public static function eliminarProducto($producto){
            $con = DataBase::connect();
            $stmt = $con->prepare("DELETE FROM producto WHERE id_producto=? ");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i",$producto);
            //Execute statement
            $stmt->execute();

            $con->close();
            
        }

        public static function modificarProducto($alterPrecio, $alterNombre, $alterCategoria, $alterImg, $alterProducto){
            $con = DataBase::connect();
            $stmt = $con->prepare("UPDATE producto SET precio= ?, nombre= ?, id_categoria=?, img = ? WHERE id_producto=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("dsisi", $alterPrecio, $alterNombre, $alterCategoria, $alterImg, $alterProducto);
            //Execute statement
            $stmt->execute();

            $con->close();
            
        }

        public static function addPedido($precioTotal,$id_usuario){
            $con = DataBase::connect();
            $stmt = $con->prepare("INSERT INTO pedido (precio_total,id_usuari) VALUES (?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("di",$precioTotal,$id_usuario);
            //Execute statement
            $stmt->execute();

            $id_pedido = mysqli_insert_id($con);

            $con->close();
           
            return $id_pedido;

            
        }

        public static function addPedidoProducto($cant,$precioTotal,$id_pedido,$id_producto){
            
            $con = DataBase::connect();
            $stmt = $con->prepare("INSERT INTO pedido_producto (cantidad,precio,id_pedido,id_producto) VALUES (?,?,?,?)");
            $stmt->bind_param("idii",$cant,$precioTotal,$id_pedido,$id_producto);
            $stmt->execute();

            $con->close();

        }

        

    }

?>
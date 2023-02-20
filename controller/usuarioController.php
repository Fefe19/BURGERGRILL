<?php

class usuarioController{

  public static function login(){
    session_start();
    if (isset($_SESSION['compra'])){
      if(isset($_POST['hamburguesa'])){($_POST['hamburguesa']);
        
        $prodSel = new Pedido(ProductDAO::getById($_POST['hamburguesa'],"entrante"));
        array_push($_SESSION['compra'],$prodSel);
        unset($_POST['hamburguesa']);
      }
  }else{
  $_SESSION['compra'] = array();
  }
    require_once 'utils/dataBase.php';
    require_once 'modelo/usuarios.php';

    if(isset($_SESSION['usuariosr'])){

      if($_SESSION['rol'] == 'admin'){
       header("Location:".base_url."usuario/admin");

      }else{

        header("Location:".base_url."usuario/cliente");

    }

  }


    if((isset($_POST['correo'])) && (isset($_POST['psswd']))){

        usuarios::accesUser($_POST['correo'],$_POST['psswd']);
      
      }

      

    require_once 'views/includes/cabecera.php';
    require_once 'views/login.php';
    require_once 'views/includes/footer.php';

    }

public static function registro(){
  
    session_start();

    require_once 'utils/dataBase.php';
    require_once 'modelo/usuarios.php';

    
    
    
    if((isset($_POST['name'])) && (isset($_POST['psswd'])) && (isset($_POST['correo']))){

        usuarios::addUser($_POST['correo'],$_POST['name'],$_POST['psswd']);

    }
    
    require_once 'views/includes/cabecera.php';
    require_once 'views/registro.php';
    require_once 'views/includes/footer.php';
    
    }

    public static function admin(){

      session_start();
      
      require_once 'utils/dataBase.php';
      include 'modelo/pedido.php';
      include 'utils/lista.php';
      require_once 'modelo/usuarios.php';

      

      require_once 'views/includes/cabecera.php';
      require_once 'views/admin.php';
      require_once 'views/includes/footer.php';


  }

  public static function adminAñadir(){

    require_once 'utils/dataBase.php';
      include 'modelo/pedido.php';
      include 'utils/lista.php';
      require_once 'modelo/usuarios.php';

    if((isset($_POST['precio'])) && (isset($_POST['nombre'])) && (isset($_POST['categoria'])) && (isset($_POST['img']))){

      productDao::addProducto($_POST['precio'],$_POST['nombre'],$_POST['categoria'], $_POST['img']);

     

    }

    header("Location:".base_url."usuario/admin");

  }

  public static function adminEliminar(){

    require_once 'utils/dataBase.php';
      include 'modelo/pedido.php';
      include 'utils/lista.php';
      require_once 'modelo/usuarios.php';

    if(isset($_POST['producto'])){

      productDao::eliminarProducto($_POST['producto']);

    }

    header("Location:".base_url."usuario/admin");

  }

  public static function adminModificar(){

    require_once 'utils/dataBase.php';
      include 'modelo/pedido.php';
      include 'utils/lista.php';
      require_once 'modelo/usuarios.php';

    if((isset($_POST['alterProducto'])) && (isset($_POST['alterPrecio'])) && (isset($_POST['alterNombre'])) && (isset($_POST['alterCategoria'])) && (isset($_POST['alterImg']))){

      productDao::modificarProducto($_POST['alterPrecio'],$_POST['alterNombre'],$_POST['alterCategoria'],$_POST['alterImg'],$_POST['alterProducto']);

    }

    header("Location:".base_url."usuario/admin");

  }

  public static function clienteModificar(){

    session_start();

      require_once 'utils/dataBase.php';
      include 'modelo/pedido.php';
      include 'utils/lista.php';
      require_once 'modelo/usuarios.php';

    if((isset($_POST['alterCorreo'])) && (isset($_POST['alterUsuario'])) && (isset($_POST['alterPsswd'])) ){

      USUARIOS::modificarUsuario($_POST['alterCorreo'],$_POST['alterUsuario'],$_POST['alterPsswd'],$_SESSION['usuariosr']);

    }

    header("Location:".base_url."usuario/cliente");

  }

  public static function cliente(){
    
    session_start();
    
    require_once 'utils/dataBase.php';
    require_once 'modelo/pedido.php';
    include 'utils/lista.php';
    require_once 'modelo/usuarios.php';
    

    

    require_once 'views/includes/cabecera.php';
    require_once 'views/cliente.php';
    require_once 'views/includes/footer.php';


}

  public static function logout(){

    require_once 'views/logout.php';
   
  }
}

?>
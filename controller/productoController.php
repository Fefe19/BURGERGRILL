<?php

class productoController{
    public static function index(){
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
        require_once 'views/includes/cabecera.php';
        require_once 'views/principal.php';
        require_once 'views/includes/footer.php';
    }

    public function carta(){

        session_start();
        require_once 'views/includes/cabecera.php';
        require_once 'views/carta.php';
        require_once 'views/includes/footer.php';
        
    }

    public static function muestraBurgers(){
        include 'modelo/pedido.php';
        include 'utils/lista.php';
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

        require_once 'views/includes/cabecera.php';
        require_once 'views/hamburguesas.php';
        require_once 'views/includes/footer.php';
    }

    public static function muestraEntrantes(){
        include 'modelo/pedido.php';
        include 'utils/lista.php';
        
        session_start();
        if (isset($_SESSION['compra'])){
            if(isset($_POST['entrante'])){($_POST['entrante']);
              
              $prodSel = new Pedido(ProductDAO::getById($_POST['entrante'],"entrante"));
              array_push($_SESSION['compra'],$prodSel);
              unset($_POST['entrante']);
            }
        }else{
        $_SESSION['compra'] = array();
        }

        require_once 'views/includes/cabecera.php';
        require_once 'views/entrantes.php';
        require_once 'views/includes/footer.php';
    }

    public static function muestraPostres(){

        include 'modelo/pedido.php';
        include 'utils/lista.php';
        
        session_start();
        if (isset($_SESSION['compra'])){
            if(isset($_POST['postre'])){($_POST['postre']);
              
              $prodSel = new Pedido(ProductDAO::getById($_POST['postre'],"entrante"));
              array_push($_SESSION['compra'],$prodSel);
              unset($_POST['postre']);
            }
        }else{
        $_SESSION['compra'] = array();
        }

        require_once 'views/includes/cabecera.php';
        require_once 'views/postres.php';
        require_once 'views/includes/footer.php';
    }

    public static function muestraBebidas(){
        
        include 'modelo/pedido.php';
        include 'utils/lista.php';
        
        session_start();
        if (isset($_SESSION['compra'])){
            if(isset($_POST['bebida'])){($_POST['bebida']);
              
              $prodSel = new Pedido(ProductDAO::getById($_POST['bebida'],"entrante"));
              array_push($_SESSION['compra'],$prodSel);
              unset($_POST['bebida']);
            }
        }else{
        $_SESSION['compra'] = array();
        }

        require_once 'views/includes/cabecera.php';
        require_once 'views/bebidas.php';
        require_once 'views/includes/footer.php';
    }

    public static function contacto(){

        session_start();
        require_once 'views/includes/cabecera.php';
        require_once 'views/contacto.php';
        require_once 'views/includes/footer.php';

    }

    public static function menuburgergrill(){
        
        session_start();
        require_once 'views/includes/cabecera.php';
        require_once 'views/menuburgergrill.php';
        require_once 'views/includes/footer.php';

    }

    public static function politicas(){
        
        session_start();
        require_once 'views/includes/cabecera.php';
        require_once 'views/politicas.php';
        require_once 'views/includes/footer.php';

    }



    public static function carrito(){
        
        include 'modelo/pedido.php';
        include 'utils/lista.php';
        include 'utils/calculaPrecios.php';

        session_start();

        if (isset($_POST['Del'])){
            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            if($pedidoSel->getCantidad() == 1){
                unset($_SESSION["compra"][$_POST['pos']]);
                $_SESSION["compra"] = array_values($_SESSION["compra"]);
            }else{

                $pedidoSel -> setCantidad($pedidoSel->getCantidad()-1);
            }

        } else if (isset($_POST['Add'])){

            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            $pedidoSel-> setCantidad($pedidoSel->getCantidad()+1);
        }

        $precioTotal = calculaPrecios::calculaPrecioTotal($_SESSION["compra"]);

       

        require_once 'views/includes/cabecera.php';
        require_once 'views/carrito.php';
        require_once 'views/includes/footer.php';

    }

    public function confirma(){
        include 'utils/lista.php';
        include 'modelo/pedido.php';
        include 'utils/calculaPrecios.php';

        session_start();

        if((!isset($_SESSION['usuariosr']))){

            header("Location:".base_url."usuario/registro");

        }

        if($_POST['precioTotal'] == 0){

            header("Location:".base_url."producto/carta");

        }

        if (isset($_POST['Del'])){
            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            if($pedidoSel->getCantidad() == 1){
                unset($_SESSION["compra"][$_POST['pos']]);
                $_SESSION["compra"] = array_values($_SESSION["compra"]);
            }else{

                $pedidoSel -> setCantidad($pedidoSel->getCantidad()-1);
            }

        } else if (isset($_POST['Add'])){

            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            $pedidoSel-> setCantidad($pedidoSel->getCantidad()+1);
        }



        if (isset($_POST['precioTotal'])){
            setcookie("precioUltimoPedido",$_POST['precioTotal']);
          }
          
        $precioTotal = calculaPrecios::calculaPrecioTotal($_SESSION["compra"]);

        if(($_POST['precioTotal'] > 0) && (isset($_SESSION['usuariosr']))){

            $a = ProductDAO::addPedido($_POST['precioTotal'],$_SESSION['usuariosr']);

        }
        
        
        
               /* echo "<pre>";
                print_r($_SESSION["compra"][0]->getProducto()->getid());
                die;*/
        
        if((isset($_POST['precioTotal']))){
            foreach ($_SESSION["compra"] as $pedido) {
                   
            ProductDAO::addPedidoProducto($pedido->getCantidad(),$_POST['precioTotal'],$a,$pedido->getProducto()->getid());

            }
        }

        require_once 'views/includes/cabecera.php';
        require_once 'views/confirmaPedido.php';
        require_once 'views/includes/footer.php';

    }
    public static function creaRessenya(){
        
        session_start();
        include ('modelo/productDAO.php');
        require_once 'views/includes/cabecera.php';
        $id_pedido = productDAO::mostrarPedido();
        require_once 'views/creaRessenya.php';
        require_once 'views/includes/footer.php';

    }
    
}

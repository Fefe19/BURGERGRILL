<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>BURGER GRILL</title>

    <meta charset="UTF-8">
    <meta name="description" content="Descripció web">
    <meta name="keywords" content="Paraules clau">
    <meta name="author" content="Autor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
  
<?php

include 'lista.php';
include 'pedido.php';
include 'calculaPrecios.php';

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

?>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #FFC03F;">
            <div class="container-xxl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-center ms-5" href="index.php"><img src="IMG/BURGERGRILL.PNG" width="170px" height="55px" alt=""></a>
                            

                <div class="collapse navbar-collapse menul" id="navbarTogglerDemo01">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item fw-bold">
                        <a class="nav-link text-color3 ms-5" aria-current="page" href="carta.php">CARTA</a>
                    </li>
                    <li class="nav-item fw-bold ">
                        <a class="nav-link text-color3 ms-5" href="menuburgergrill.php">MENU BURGER GRILL</a>
                    </li>
                    <li class="nav-item fw-bold ">
                        <a class="nav-link text-color3 ms-5" href="contacto.php">CONTACTO</a>
                    </li>
                    </ul>
                    
                </div>
                <div id="botones_tienda_smartphone">
                  <a href="#" class="me-2"><img src="img/usuario.png" alt=""></a>
                  <a><?= count($_SESSION['compra']);?></a>
                  <a href="#"><img src="img/carrito.png" alt=""></a>
              </div> 
                <div id="botones_tienda_escritorio" class="form-inline my-2 my-lg-0">
                  <a href="#" class="me-2"><img src="img/usuario.png" alt=""></a>
                  <a id="cont_tienda"><?= count($_SESSION['compra']);?></a>
                  <a href="carrito.php"><img src="img/carrito.png" alt=""></a>
                </div>
            </div>
          </nav>
    </header>
    <section id="banner_principal" class="container-fluid" style="background-image: URL(img/BANNERS.png);">
        <div class="col-12 banner">
            <h1 class="mb-3 text-color1 ">¡DESCUBRE NUESTRAS MEJORES</h1>
            <h1 class="mb-3 text-color1 ">HAMBURGUESAS!</h1>
            <a class="nav-link " href="hamburguesas.php"><button type="button"  style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;" class="btn  btn-outline-color1 fw-bold" >¡VER MÁS!</button></a>
        </div>
    </section>

    <section class="container-fluid" style="background-color:black">
        <div class="row">
            <div class="col-lg-6 izquierda" style="background-color:#FFC03F">
                <h2 class="mb-5 fs-1  fw-bold" style="margin-top: 30px;">Haz tu pedido online</h2>
                <p class="mb-5 fs-2" style=" margin-right: 30px; margin-left: 30px;">Los mejores sabores de hamburguesas. Haz tu pedido online en nuestra hamburgueseria de una forma fácil y rápida. </p>
                <form action='carta.html'>
                  <a class="nav-link " href="carta.php"><button type="button" action="carta.html" class="btn btn-outline-color1 fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">PEDIR</button></a>
                </form>
            </div>
                <div id="seccion_pedido" class="col-lg-6 derecha "  style="background-image: URL(img/HAMBURGUESAS.jpg);">
            </div>
        </div>
    </section>

    <section class="container-fluid" style="background-color:white" >
        <h2 class="mb-5 fs-1 text-center" style="margin-top: 50px;">¡NUESTRAS HAMBURGUESAS MÁS SOLICITADAS!</h2>
        <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-4 mt-5">
                <img src="img/YANKEE.png" class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4">HAMBURGUESA YANKEE</h3> 
            </div>
            <div class="col-lg-4 mt-5">
                <img src="img/PIGMA.png " class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4" >HAMBURGUESA PIGMA</h3>
            </div>
            <div class="col-lg-6 mt-5">
            <a class="nav-link " href="hamburguesas.php"><button type="button" class="btn btn-outline-color1 fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">¡VER MÁS!</button></a>
            </div>
        </div>
    </section>

    <section class="container-fluid" style="background-color:#E0CA9F" >
        <h2 class="mb-5 fs-1 text-center pt-5" style="margin-top: 50px;">¡NUESTRAS HAMBURGUESAS MÁS SOLICITADAS!</h2>
        <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-4 mt-5">
                <img src="img/NACHOSH.png" class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4">NACHOS DE CARNE Y CHILI</h3>
                
            </div>
            <div class="col-lg-4 mt-5">
                <img src="img/BRAVAS.png " class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4" >PATATAS BRAVAS</h3>
            </div>
            <div class="col-lg-6 mt-5 pb-5">
            <a class="nav-link " href="entrantes.php"><button type="button" class="btn btn-outline-color1  fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">¡VER MÁS!</button></a>
            </div>
        </div>

        <div class="col-lg-12 text-center">
        
        <?php 
          
          if (isset($_COOKIE['precioUltimoPedido'])){
            echo "PRECIO TOTAL DE TÚ PEDIDO ANTERIOR:";
            echo $_COOKIE['precioUltimoPedido']."€";
          }
        ?>
        </div>
    </section>

    <footer class=" text-center text-lg-start "  style=" margin-top:0px; background-color:#FFC03F">
        <div class="container p-4 ">
          <div class="row">
            <div class="col-lg-2 col-md-6 col-6 mb-4 mb-md-0" >
              <ul class="list-unstyled mb-0" >
                <li>
                    <a class="text-dark footer_e" id="footer_op" href="carta.php">Carta</a>
                </li>
                <li>
                  <a href="menuburgergrill.php" id="footer_op" class="text-dark footer_e pt-3">Menu Burger Grill</a>
                </li>
                <li>
                  <a href="contacto.php" id="footer_op" class="text-dark footer_e">Contacto</a>
                </li>
                <li>
                  <a href="carrito.php" id="footer_op" class="text-dark footer_e">Mi Carrito</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-6 mb-4 mb-md-0 ">      
              <ul class="list-unstyled">
                <li>
                  <a href="aviso.php" class= "text-dark footer_e">Aviso Legal</a>
                </li>
                <li>
                  <a href="politicas.php" class="text-dark footer_e">Política de Privacidad
                  </a>
                </li>
                <li>
                  <a href="bases.php" class="text-dark footer_e">Bases y Condiciones</a>
                </li>
                <li>
                  <a href="cookies.php" class="text-dark footer_e">Política de Cookies</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="index.php" class="ms-4"><img src="IMG/BURGERGRILL.PNG" width="110px" height="55px" alt=""></a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0">

                <a href="#!" class="ms-4 " role="button"><img src="IMG/insta.png" width="40px" height="40px" alt=""></a>
              <a href="#!" class="ms-4" role="button"><img src="IMG/linkedin.png" width="40px" height="40px" alt=""></a>
            <a href="#!" class="ms-4" role="button"><img src="IMG/facebook.png" width="40px" height="40px" alt=""></a>
          <a href="#!" class="ms-4" role="button"><img src="IMG/twitter.png" width="40px" height="40px" alt=""></a>
            </div>

          </div>

        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2022 BURGER GRILL - Todos los derechos reservados
        </div>

      </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
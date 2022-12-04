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

<body class="fondo">

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

    <section id="banner_carta" class="container-fluid" style="background-image: URL(img/carta.png);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">POLÍTICA DE COOKIES</h1>
        </div>
    </section>
    <section class="text-center">
      <h3 class="ms-5 me-5 mt-5 mb-5">Una cookie es un fichero que se descarga en tu ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice tu equipo, pueden utilizarse para reconocer al usuario.</h3><h3 class="ms-5 me-5 mt-5 mb-5">

BURGERGRILL utiliza cookies para facilitar la navegación por su web, por motivos de seguridad y para obtener una mayor eficacia y personalización de los servicios ofrecidos a los usuarios. La información que obtiene está relacionada con el número de páginas visitas, el idioma, red social en la que se publican nuestras noticias, la ubicación geográfica asignada a la dirección IP desde la que accede, el número de nuevos usuarios, la frecuencia y reincidencia de las visitas, el tiempo de visita, el navegador y el operador o tipo de terminal desde el que se realiza la visita.</h3><h3 class="ms-5 me-5 mt-5 mb-5">

Esta información la utilizamos para mejorar nuestras páginas, detectar nuevas necesidades y valorar las mejoras a introducir con la finalidad de prestar un mejor servicio a los usuarios que nos visitan adaptándolas, por ejemplo, a los navegadores o terminales más utilizados.</h3><h3 class="ms-5 me-5 mt-5 mb-5">

Permiten mejorar la calidad y seguridad de la página web. Poseen una fecha de caducidad, que puede oscilar desde el tiempo que dure la sesión, hasta una fecha futura especificada a partir de la cual dejan de ser operativas.</h3><h3 class="ms-5 me-5 mt-5 mb-5">

BURGERGRILL hace uso de cookies propias, así como de terceros. Algunas estrictamente necesarias, para el correcto funcionamiento de esta página y analíticas, para mostrarte información de tu interés.</h3><h3 class="ms-5 me-5 mt-5 mb-5">

En cualquier momento puedes cambiar o retirar tu consentimiento desde la Declaración de cookies, por medio del enlace “Cambiar su consentimiento” en nuestro sitio web.</h3>

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
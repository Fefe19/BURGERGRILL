<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>BURGER GRILL</title>

    <meta charset="UTF-8">
    <meta name="description" content="DescripciĆ³ web">
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
            <h1 class="mb-3 text-color1">POLĆTICA DE PROTECCIĆN DE DATOS DE CARĆCTER PERSONAL</h1>
        </div>
    </section>
    <section class="text-center">
      
      <h3 class="ms-5 me-5 mt-5">(I) Los datos de carĆ”cter personal facilitados con ocasiĆ³n del registro, en general; identificativos, caracterĆ­sticas personales, y de contacto electrĆ³nico, en particular

</h3><h3 class="ms-5 me-5 mt-5">(II) Los datos autorizados en caso de registro por medio del login de redes sociales

</h3><h3 class="ms-5 me-5 mt-5">(III) Datos derivados de la relaciĆ³n comercial con BURGERGRILL, en general; los procedentes del uso de los distintos servicios, aquellos que facilites en el proceso de reservas, compras y/o contrataciĆ³n, datos para efectuar/ autorizar el pago y facturar los productos y servicios, en particular

</h3><h3 class="ms-5 me-5 mt-5">(IV) Los resultantes de procesos informĆ”ticos (hĆ”bitos de navegaciĆ³n o uso del medio y/o entorno digital), DirecciĆ³n IP e informaciĆ³n recopilada a travĆ©s de cookies, etiquetas de pĆ­xel y otras tecnologĆ­as (para mĆ”s informaciĆ³n, consulta nuestra polĆ­tica de cookies)

</h3><h3 class="ms-5 me-5 mt-5 mb-5">(V) Aquellos que BURGERGRILL pueda inferir a partir de datos lĆ­citamente obtenidos.

BURGERGRILL tratarĆ” y almacenarĆ” tus datos mientras seas usuario activo en el medio y/o entorno digital y cliente BURGERGRILL, asĆ­ como durante el plazo de prescripciĆ³n de obligaciones legales, que pudieran nacer de posibles responsabilidades vinculadas al tratamiento de los datos de cliente.</h3>

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
                  <a href="politicas.php" class="text-dark footer_e">PolĆ­tica de Privacidad
                  </a>
                </li>
                <li>
                  <a href="bases.php" class="text-dark footer_e">Bases y Condiciones</a>
                </li>
                <li>
                  <a href="cookies.php" class="text-dark footer_e">PolĆ­tica de Cookies</a>
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
            Copyright Ā© 2022 BURGER GRILL - Todos los derechos reservados
        </div>

      </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
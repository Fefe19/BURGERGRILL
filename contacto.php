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

    <section id="banner_carta" class="container-fluid" style="background-image: URL(img/carta.png);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">¡CONTÁCTENOS!</h1>
        </div>
    </section>

    <section class="container-fluid" style="background-color:#F0E3CA">
      <div class="row justify-content-md-center ">
        <div class="col-lg-4 mt-5 text-color3 fw-bold " style="background-color:#FFC03F">
            <img src="img/reloj.png" class="icono_c mt-3">
            <h4 class=" mt-3 fw-bold">HORARIO</h4>
            <p>Domingo-Jueves</p>
            <p>13:00 - 16:00 y 19:30 - 22:30</p>
            <p>Viernes-Sábado</p>
            <p>13:00 - 16:00 y 19:30 - 23:30</p>
            <img src="img/ubicacion.png" class="icono_c mt-3 mt-5">
            <h4 class=" mt-3 fw-bold">¿DÓNDE ESTAMOS?</h4>
            <P>Carrer Ntra. Sra. de Lourdes, 34, 08750 Molins de Rei, Barcelona</p>
            <h4 class="fw-bold mb-3">+34 936638876</h4>
        </div>
        <div class="col-lg-5 ">
          <form>
            <div class="row">
              <div class="col-lg-6 mt-5">
                <label for="Name">Nombre:</label><br>
                <input type="text" id="Name" placeholder="" value="" required="">
              </div>
              <div class="col-lg-6 mt-5">
                <label for="Surname">Apellido:</label><br>
                <input type="text" id="Surname" placeholder="" value="" required="">
              </div>
              <div class="col-lg-6 mt-5">
                <label for="Tel">Teléfono:</label><br>
                <input type="text" id="Tel" placeholder="" value="" required="">
              </div>
              <div class="col-lg-6 mt-5">
                <label for="Correo">E-mail:</label><br>
                <input type="text" id="Correo" placeholder="" value="" required="">
              </div>
              <div class="col-lg-6 mt-5">
                <label for="Men">Mensaje:</label><br>
                <input type="text" class="input_t" id="Men" placeholder="" value="" required="">
              </div>
              <div class="col-lg-12 mt-5">
                <button type="button" class="btn btn-outline-color1  mt-5 fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">ENVIAR</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-md-center ">
        <div class="col-lg-9  text-color3 fw-bold mb-5" style="background-color:#FFC03F">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11969.241686239795!2d2.0269731!3d41.4107797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x967c9dc9d440c41b!2sInstitut%20Bernat%20el%20Ferrer!5e0!3m2!1sca!2ses!4v1668713151155!5m2!1sca!2ses" class="mt-3 ms-1  mb-3" width="99%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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
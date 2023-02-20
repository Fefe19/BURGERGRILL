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
    <link href=<?=base_url."/assets/css/bootstrap.min.css"?> rel="stylesheet">
    <link href=<?=base_url."/assets/css/full_estil.css"?> rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    
    <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #FFC03F;">
                <div class="container-xxl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand text-center ms-5" href=<?=base_url."producto/index"?>><img src=<?=base_url."/IMG/BURGERGRILL.svg"?> width="170px" height="55px" alt=""></a>
                                
                    <div class="collapse navbar-collapse menul" id="navbarTogglerDemo01">
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item fw-bold">
                            <a class="nav-link text-color3 ms-5" aria-current="page" href=<?=base_url."producto/carta"?>>CARTA</a>
                        </li>
                        <li class="nav-item fw-bold ">
                            <a class="nav-link text-color3 ms-5" href=<?=base_url."producto/menuburgergrill"?>>MENU BURGER GRILL</a>
                        </li>
                        <li class="nav-item fw-bold ">
                            <a class="nav-link text-color3 ms-5" href=<?=base_url."producto/contacto"?>>CONTACTO</a>
                        </li>
                        </ul>
                        
                    </div>
                <div id="botones_tienda_smartphone">
                <?php 
                    if(isset($_SESSION['usuariosr'])){
                        echo ($_SESSION['nombre'])?>
                  <?php }?>
                  <a href=<?=base_url."usuario/login"?> class="me-2"><img src=<?=base_url."img/usuario.svg"?> alt=""></a>
                 
                    <?=count($_SESSION['compra'])?>
                  <a href=<?=base_url."producto/carrito"?>><img src=<?=base_url."img/carrito.svg"?> alt=""></a>
                  <?php 
                    if(isset($_SESSION['usuariosr'])){
                        ?><a href=<?=base_url."usuario/logout"?> class="me-2"><img src=<?=base_url."img/apagado.svg"?> alt=""></a>
                   <?php }?>
                </div> 
                <div id="botones_tienda_escritorio" class="form-inline my-2 my-lg-0">
                    
                <?php 
                    if(isset($_SESSION['usuariosr'])){
                        echo ($_SESSION['nombre'])?>
                  <?php }?>
                  <a href=<?=base_url."usuario/login"?> class="me-2"><img src=<?=base_url."img/usuario.svg"?> alt=""></a>
                  <?php 
                    if(isset($_SESSION['usuariosr'])){
                        ?><a href=<?=base_url."usuario/logout"?> class="me-2"><img src=<?=base_url."img/apagado.svg"?> alt=""></a>
                   <?php }?>
                    <?=count($_SESSION['compra'])?>
                  <a href=<?=base_url."producto/carrito"?>><img src=<?=base_url."img/carrito.svg"?> alt=""></a>
                  
                </div>
             </div>
            </nav>
        </header>
</body>

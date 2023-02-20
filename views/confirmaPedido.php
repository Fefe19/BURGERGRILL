
    <section id="banner_carta" class="container-fluid" style="background-image: URL(<?= base_url.'img/carta.webp'?>);">
        <div class="col-12 banner">
            <h1 class="mb-3 text-color1">TÚ PEDIDO</h1>
        </div>
    </section>
    <section class="container-fluid" style="background-color:#F0E3CA" >
    <div class="row justify-content-md-center seccion_ham tam">
    <div class="col-lg-12 mt-5 " >
      <h2 class="fw-bold "> PEDIDO CONFIRMADO: </h2>
      </div>
    <?php
    $pos = 0;
    foreach ($_SESSION["compra"] as $pedido) { 

        ?>
          <div class="col-lg-3 mt-5 " >
              <div>
                  <img src='<?= base_url.$pedido->getProducto()->getImg(); ?>'>
              </div>
          </div>
          <div class="col-lg-3 mt-5" >
            <h3><?=$pedido->getProducto()->getNombre()?></h3>
          </div>
          <div class="col-lg-3 mt-5" >
            <h3><?=$pedido->getProducto()->getPrecio()?>€</h3>
          </div>
          <div class="col-lg-3 mt-5" >
            <h3>cantidad: <?=$pedido->getCantidad()?></h3>
          </div>
              
    <?php $pos++; } ?>
      <div class="col-lg-12 mt-5 mb-5 " >
        <h3 class="tam">PRECIO TOTAL</h3>
        <h2>
            <?php
            
              echo $precioTotal."€";

            ?>
          </h2>
        </div>
    </div>
    </section>
 

    <section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">CARRITO</h1>
        </div>
    </section>

    <section class="container-fluid" style="background-color:#F0E3CA" >
    <div class="row justify-content-md-center seccion_ham">
    
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
            <div class="col-lg-3 mt-5 mb-5" >
              <form  action='' method='post'>
                <input type="hidden" name="pos" value=<?=$pos?>>
                <h3>
                <button  class="me-5" type="submit" name='Add'>+</button>
                <?=$pedido->getCantidad()?>
                <button class="ms-5" type="submit" name='Del'>-</button>
                </h3>
              </form>
              </div>
    
    <?php $pos++; } ?>
      <tr>
      <div class="col-lg-12  mt-5 mb-5" >
        <h3 class="mt-5 ms-5" >PRECIO TOTAL: </h3>
            <h3 class=" ms-5"><?php
              echo $precioTotal." €";
            ?></h3>
            <form class="ms-4" action=<?=base_url."/producto/confirma"?> method='post'>
            <p><input type="hidden" name="precioTotal" value=<?=$precioTotal?>></p>
            <button class="btn btn-outline-color1 fw-bold mb-1" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;" type="submit" type="submit" name='pos'>PAGAR</button>
            </form>
      <div>
    
    </div>
    </section>
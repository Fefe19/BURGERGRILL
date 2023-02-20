
    <section id="banner_carta" class="container-fluid" style="background-image: URL(<?= base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">¡NUESTRAS HAMBURGUESAS!</h1>
        </div>
    </section>
    <section class="container-fluid" style="background-color:#F0E3CA" >
    
    <div class="row justify-content-md-center seccion_ham">
      
        <table>
            <?php
            
            foreach ($bebidas as $bebida){ ?>
              <div class="col-lg-4 mt-5 mb-5" >
                
                        <div>
                            <img style="width: 60%;" src='<?= base_url.$bebida->getImg(); ?>'>
                        </div>
                  
                <div class="pt-2 pb-4 fw-bold" style="background-color:#FFC03F; margin-right:20%; margin-left:20%;">
                    <p><?= $bebida->getNombre(); ?></p>
                    <?= $bebida->getPrecio()."€"; ?>
                        <form  action=<?=base_url."producto/muestraBebidas"?> method='post'>
                            <input type="hidden" name="bebida" value=<?= $bebida->getId();?> >
                            <button class="btn btn-outline-color1  fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;" type="submit">AÑADIR</button>
                        </form>
                </div>
              </div>
            <?php } ?>
            </div>
        </table>
      </section>
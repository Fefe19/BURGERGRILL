<section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">ADMINISTRADOR</h1>
        </div>
</section>


<section >
    <div class="col-lg-6  mt-5  " style="background-color:#FFC03F; margin-left:auto;margin-right:auto;">
    <table class="table  table-striped" style="border:1px solid black;">
        <thead>
            <tr>
            <?php
            //mostramos los productos
            foreach ($entrantes as $entrante){ ?>
                </tr>
                </thead> 
                <th><?= $entrante->getId();?> </th>
              
                <th><?= $entrante->getNombre(); ?></th> 
                <th><?= $entrante->getPrecio()."€"; ?></th> 
                <th><?= $entrante->getImg();?></th> 
            
            <?php } ?>
            <thead>
            <tr>
            <?php 
            foreach ($hamburguesas as $entrante){ ?>
            </tr>
                </thead> 
                
                <th><?= $entrante->getId();?></th> 
                <th><?= $entrante->getNombre(); ?></th> 
                <th><?= $entrante->getPrecio()."€"; ?></th> 
                <th><?= $entrante->getImg();?></th> 
                
            <?php } ?>
            <thead>
            <tr>
            <?php 
            foreach ($postres as $entrante){ ?>
             </tr>
                </thead> 
                
                <th><?= $entrante->getId();?></th> 
                <th><?= $entrante->getNombre(); ?></th> 
                <th><?= $entrante->getPrecio()."€"; ?></th> 
                <th><?= $entrante->getImg();?>  </th> 
            
            <?php } ?>
            <thead>
            <tr>
            <?php 
            foreach ($bebidas as $entrante){ ?>
            </tr>
                </thead> 
                <th><?= $entrante->getId();?></th> 
                <th><?= $entrante->getNombre(); ?></th> 
                <th> <?= $entrante->getPrecio()."€"; ?></th> 
                <th><?= $entrante->getImg();?></th> 
            <?php } ?>
            
        </table>
        <div> 
</section>

            <section>
            <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-2 col-md-2 col-sm-2  mt-5 mb-5" >
                <form method="POST" action=<?=base_url."/usuario/adminAñadir"?>>
                    <h2>AÑADIR PRODCUTO</h2>

                    <p>PRECIO: 
                    <input type="precio" name="precio"  />
                    <label class="form-label" ></label></p>

                    <p>NOBMRE: <input type="nombre" name="nombre"  />
                    <label class="form-label"></label></p>

                    <p>ID_CATEGORIA: <input type="categoria"  name="categoria"  />
                    <label class="form-label" ></label></p>

                    <p>RUTA IMAGEN: <input type="img"  name="img"  />
                    <label class="form-label" ></label></p>


                    <p><button class="btn btn-outline-color1  fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;"  type="submit">Añadir</button></p>
                </form>

            </div>
                <div class="col-lg-2 admin col-md-6 col-sm-6  mt-5 mb-5" >
                <form method="POST" action=<?=base_url."/usuario/adminEliminar"?>>
                    <h2>ELIMINAR PRODUCTO</h2>
                    <p>ID_PRODUCTO: 
                    <input type="producto" name="producto" />
                    <label class="form-label" ></label></p>

                    <p><button class="btn btn-outline-color1  fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;"  type="submit">Eliminar</button></p>
                </form>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6  mt-5 mb-5" >
                <form method="POST" action=<?=base_url."/usuario/adminModificar"?>>
                    <h2>MODIFICAR PRODUCTO</h2>
                    <p>ID_PRODUCTO: 
                    <input type="alterProducto" name="alterProducto" />
                    <label class="form-label" ></label></p>

                    <p>PRECIO: 
                    <input type="alterPrecio"  name="alterPrecio"  />
                    <label class="form-label" ></label></p>

                    <p>NOBMRE: <input type="alterNombre" name="alterNombre"  />
                    <label class="form-label"></label></p>

                    <p>ID_CATEGORIA: <input type="alterCategoria" name="alterCategoria"  />
                    <label class="form-label" ></label></p>

                    <p>RUTA IMAGEN: <input type="alterImg" name="alterImg"  />
                    <label class="form-label"></label></p>

                    <p><button class="btn btn-outline-color1  fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;" type="submit">Modificar</button></p>
                </form>
                </div>
            </div>
            </section>
         
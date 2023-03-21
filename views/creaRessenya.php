<body  class="fondo" onload="filtrar();">

<section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">¡RESEÑAS!</h1>
        </div>
</section>

<?php 
if(isset($_SESSION['usuariosr'])){?>
<div class="mt-5 fw-bold mb-5" style="text-align: center;">
<button type="button" class="btn btn-outline-color1 fw-bold" data-bs-toggle="modal" data-bs-target="#crear" data-bs-whatever="@getbootstrap" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">CREAR RESEÑA</button>
</div>
<?php 
}?>

<div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#FFC03F">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">CREAR RESEÑA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="formulario">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label fw-bold">ID_pedido:</label>
            <select id="pedido" name="pedido" class="form-select " style="width:16%; display: inline-block;">
              <?php
               for ($i=0;$i < count($id_pedido);$i++){
                ?>
                <option value="<?=$id_pedido[$i]?>"><?=$id_pedido[$i]?></option>
              <?php
               }?>
            </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label fw-bold">Descripcion:</label>
            <textarea class="form-control" id="descripcion"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label fw-bold">Valoración:</label>
            <select id="valoracion" name="valoracion" class="form-select " style="width:14%; display: inline-block;">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-color1 fw-bold" value="Enviar" onclick="creaValor()" data-bs-dismiss="modal" style="height:40px; width:100px; border-color:black; border-width:3px; border-radius: 20px;">Crear</button>
      </div>
    </div>
  </div>
</div>

<div class="mt-5 fw-bold mb-5" style="text-align: center;">
  <label for="orden" style="display: inline-block;">Ordenar por </label>
  <select id="orden" class="form-select fw-bold mx-2" style="width:20%; display: inline-block;">
    <option value="asc">Valoración (ascendente)</option>
    <option value="desc">Valoración (descendente)</option>
  </select>
</div>

<div  id="lista"></div>

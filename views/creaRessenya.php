<body  class="fondo" onload="filtrar();">

<section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">¡RESEÑAS!</h1>
        </div>
</section>
<?php 
if(isset($_SESSION['usuariosr'])){?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crear" data-bs-whatever="@getbootstrap">CREAR RESEÑA</button>
<?php 
}?>
<div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="formulario">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">ID_pedido:</label>
            <select id="pedido" name="pedido">
            <?php 
    for($i=0; $i < count($id_pedido);$i++){?>
    
    
    <option value="<?=$id_pedido[$i]?>"><?=$id_pedido[$i]?></option>
    <?php
    }?>
  </select> 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descripcion:</label>
            <textarea class="form-control" id="descripcion"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descripcion:</label>
            <select id="valoracion" name="valoracion">
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="Enviar" onclick="creaValor()">Send message</button>
      </div>
    </div>
  </div>
</div>
<!--
<form method="post" id="formulario">
  <label for="pedido">id_pedido:</label>

  <select id="pedido" name="pedido">
    <?php 
    for($i=0; $i < count($id_pedido);$i++){?>
    
    
    <option value="<?=$id_pedido[$i]?>"><?=$id_pedido[$i]?></option>
    <?php
    }?>
  </select>
  
  
  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion"></textarea><br><br>

  <label for="valoracion">Valoración:</label>
  <select id="valoracion" name="valoracion">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>

  

  <button type="button" value="Enviar" onclick="creaValor()"> Enviar </button>

</form>-->

<label for="orden">Filtrar por nota: </label>
<select id="orden" name="orden">
    <option value="asc">Ascendente</option>
    <option value="desc">Descendente</option>
<select>

<div  id="lista"></div>

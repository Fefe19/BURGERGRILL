<section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">CLIENTE</h1>
        </div>
</section>

<section class="mt-5 " style="text-align:center;">

    <h2>Datos del cliente</h2>

     <p>ID USUARIO: <?php echo $_SESSION['usuariosr'];?></p>
     <p>CORREO: <?php echo $_SESSION['correo'];?></p>
     <p>NOMBRE: <?php echo $_SESSION['nombre'];?></p>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</section>

<section class="mt-5" style="text-align:center;">
    <h2>Cambiar Datos</h2>
    
    <form method="POST" action=<?=base_url."/usuario/clienteModificar"?>>
        <p class="mt-3">NOMBRE NUEVO: </p><input type="alterUsuario" name="alterUsuario"/>
                    <label class="form-label" ></label>

        <p class="mt-3">CORREO NUEVO: </p> <input type="correo" name="alterCorreo"/>
                    <label class="form-label" ></label>

       <p class="mt-3"> CONTRASEÑA NUEVA:</p> <input type="password"  name="alterPsswd"/>
                    <label class="form-label" ></label>

                    <p><button class="btn btn-outline-color1 mt-3   fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;" type="submit">Cambiar</button></p>
    </form>
    
</section>


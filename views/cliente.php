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


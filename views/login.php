    <section id="banner_carta" class="container-fluid" style="background-image: URL(<?=base_url.'img/carta.webp'?>);">
        <div class="col-12 bannerm">
            <h1 class="mb-3 text-color1">INICIAR SESIÓN</h1>
        </div>
    </section>

<section class="vh-100 mx-5 mt-5 mb-5 " >
  <div class="container h-100 mt-5 mb-5" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style=" background-color:#FFC03F">
          <div class="card-body p-5 text-center" >

            <h3 class="mb-5">Inicia la sesión</h3>

            <form method="POST">
             <div class="form-outline mb-4">
                <label class="form-label " for="typeEmailX-2">CORREO: </label>
                <input type="correo" id="typeEmailX-2" name="correo" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline mb-4">
              <label class="form-label" for="typePasswordX-2">CONTRASEÑA:</label>
              <input type="password" name="psswd" id="typePasswordX-2" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-outline-color1  fw-bold" style="height:50px; width:150px; border-color:black; border-width:3px; border-radius: 20px;" type="submit">Inicar Sesión</button>

              <hr class="my-4">

              <p> Regístrate si todavía no lo estas: <a href=<?=base_url."/usuario/registro"?>> Registrarse</a><p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

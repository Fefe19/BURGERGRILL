
    <section id="banner_principal" class="container-fluid" style="background-image: URL(<?=base_url.'img/BANNERS.webp'?>);">
        <div class="col-12 banner">
            <h1 class="mb-3 text-color1 ">¡DESCUBRE NUESTRAS MEJORES</h1>
            <h1 class="mb-3 text-color1 ">HAMBURGUESAS!</h1>
            <a class="nav-link " href=<?=base_url.'/producto/muestraBurgers'?>><button type="button"  style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;" class="btn  btn-outline-color1 fw-bold" >¡VER MÁS!</button></a>
        </div>
    </section>

    <section class="container-fluid" style="background-color:black">
        <div class="row">
            <div class="col-lg-6 izquierda" style="background-color:#FFC03F">
                <h2 class="mb-5 fs-1  fw-bold" style="margin-top: 30px;">Haz tu pedido online</h2>
                <p class="mb-5 fs-2" style=" margin-right: 30px; margin-left: 30px;">Los mejores sabores de hamburguesas. Haz tu pedido online en nuestra hamburgueseria de una forma fácil y rápida. </p>
                <form action='carta.html'>
                  <a class="nav-link " href=<?=base_url.'/producto/carta'?>><button type="button" class="btn btn-outline-color1 fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">PEDIR</button></a>
                </form>
            </div>
                <div id="seccion_pedido" class="col-lg-6 derecha "  style="background-image: URL(<?=base_url.'img/HAMBURGUESAS.webp'?>);">
            </div>
        </div>
    </section>

    <section class="container-fluid" style="background-color:white" >
        <h2 class="mb-5 fs-1 text-center" style="margin-top: 50px;">¡NUESTRAS HAMBURGUESAS MÁS SOLICITADAS!</h2>
        <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-4 mt-2">
                <img src=<?=base_url."img/YANKEE.webp"?> class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4">HAMBURGUESA YANKEE</h3> 
            </div>
            <div class="col-lg-4 mt-2">
                <img src=<?=base_url."img/PIGMA.webp"?> class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4" >HAMBURGUESA PIGMA</h3>
            </div>
            <div class="col-lg-6 mt-5">
            <a class="nav-link " href=<?=base_url.'/producto/muestraBurgers'?>><button type="button" class="btn btn-outline-color1 fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">¡VER MÁS!</button></a>
            </div>
        </div>
    </section>

    <section class="container-fluid" style="background-color:#E0CA9F" >
        <h2 class="mb-5 fs-1 text-center pt-5" style="margin-top: 50px;">¡NUESTROS ENTRANTES MÁS SOLICITADAS!</h2>
        <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-4 mt-2">
                <img src=<?=base_url."img/NACHOSH.webp"?> class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4">NACHOS DE CARNE Y CHILI</h3>
                
            </div>
            <div class="col-lg-4 mt-2">
                <img src=<?=base_url."img/BRAVAS.webp"?> class="mx-auto" >
                <h3 class="mx-auto letra_t my-2 fs-4" >PATATAS BRAVAS</h3>
            </div>
            <div class="col-lg-6 mt-5 pb-5">
            <a class="nav-link " href=<?=base_url.'/producto/muestraEntrantes'?>><button type="button" class="btn btn-outline-color1  fw-bold" style="height:50px; width:200px; border-color:black; border-width:3px; border-radius: 20px;">¡VER MÁS!</button></a>
            </div>
        </div>

        <div class="col-lg-12 text-center">
        </div>
    </section>

    <section class="container-fluid" style="background-color:white" >
        <h2 class="mb-5 fs-1 text-center pt-5">¡NUESTRO RESTAURANTE!</h2>
        <div class="row justify-content-md-center seccion_ham">
            <div class="col-lg-6 mb-5 ">
            <iframe  src="https://www.youtube.com/embed/S892mObU2jM" title="YouTube video player" id="video_movil" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

       
    </section>

    

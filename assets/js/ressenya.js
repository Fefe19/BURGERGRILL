function creaValor() {
    
    let pedido = document.getElementById("pedido").value;
    let descripcion = document.getElementById("descripcion").value;
    let valoracion = document.getElementById("valoracion").value;
    
    fetch('http://localhost/BURGERGRILLCOPIA/api/api.php', {
        method: 'POST',
        
        body: JSON.stringify({
            pedido: pedido,
            descripcion: descripcion,
            valoracion: valoracion,
        }),
        headers: {
            "Content-Type": "application/json; charset=UTF-8",
        },
    }).then((response) => console.log(pedido))
    .then(response => [console.log(descripcion)])
    .then(response => [console.log(valoracion)])

}

let lista = document.getElementById('lista');
let orden = document.getElementById('orden').value;

document.getElementById('orden').addEventListener("change", ()=>{
  orden=document.getElementById('orden').value;
  filtrar();
});
let resultado = [];

function filtrar(){
lista.innerHTML = '';
fetch('http://localhost/BURGERGRILLCOPIA/api/api.php')
        .then(response =>response.json() )
        .then((data) => {
          resultado = data;
          
          if (orden === 'asc') {
            resultado.sort((a, b) => a.nota - b.nota);
          } else if (orden === 'desc') {
            resultado.sort((a, b) => b.nota - a.nota);
          }
            resultado.forEach((post) => {
                let li = document.createElement('div')
                li.innerHTML = `
  <div class="card text-center mb-5" style="background-color:#FFC03F; margin-right:25%; margin-left:25%;">
    <div class="card-header " style="background-color: rgba(0, 0, 0, 0.1);">
      <ul class="nav nav-pills card-header-pills " >
        <li class="nav-item" >
          <h5 class="card-title"><b>ID USUARIO: ${post.id_usuario}</b></h5>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">NÚMERO PEDIDO: ${post.id_pedido}</h5>
      <p class="card-text">${post.descripcion}</p>
      <h5 class="card-title">VALORACIÓN: ${post.nota}/5</h5>
    </div>
  </div>                 
                `;
                lista.append(li)
                    
            })
    }); 
}

/*let modalShown = false; // Variable de control para verificar si la modal ha sido mostrada

$("#menu").mouseover(function () {
  if (!modalShown) { // Si la modal no ha sido mostrada
    $('#exampleModal').modal('show'); // Muestra la modal
    modalShown = true; // Establece la variable de control a true para indicar que la modal ha sido mostrada
  }
});*/



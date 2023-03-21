let modalShown = false; // Variable de control para verificar si la modal ha sido mostrada

$("#cerrar").mouseover(function () {
  if (!modalShown) { // Si la modal no ha sido mostrada
    $('#exampleModal').modal('show'); // Muestra la modal
    modalShown = true; // Establece la variable de control a true para indicar que la modal ha sido mostrada
  }
});
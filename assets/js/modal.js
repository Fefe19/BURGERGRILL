function showModal(delay) {
    setTimeout(function() {
      // Mostrar la modal aquí
      $('#exampleModal').modal('show');
    }, delay);
  }
  
  let currentTime = new Date().getTime();
  
  localStorage.setItem('entryTime', currentTime);
  
  if (!localStorage.getItem('modalShown') || (currentTime - localStorage.getItem('lastModalTime')) > 30 * 60 * 1000) {
    // Get the entry time from localStorage
    let entryTime = localStorage.getItem('entryTime');
  
    let delay1 = 10000 - (currentTime - entryTime);
  
    // Calculate the delay until the modal should be shown (30 minutes after entry time)
    let delay2 = 30 * 60 * 1000 - (currentTime - entryTime);
  
    // Show the modal after the delay if the delay is positive
    if (delay1 > 0) {
      showModal(delay1);
    }
  
    if (delay2 > 0) {
      showModal(delay2);
    }
  
    // Set the value of the key in localStorage to indicate that the modal has been shown
    localStorage.setItem('modalShown', true);
  }

let modalShown = false; // Variable de control para verificar si la modal ha sido mostrada

$("#cerrar").mouseover(function () {
  if (!modalShown) { // Si la modal no ha sido mostrada
    $('#exampleModal').modal('show'); // Muestra la modal
    modalShown = true; // Establece la variable de control a true para indicar que la modal ha sido mostrada
  }
});
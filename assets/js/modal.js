//localStorage.removeItem('lastModalTime');

function showModal(delay) {
  setTimeout(function() {
    // Mostrar la modal aquí
    $('#exampleModal').modal('show');
  }, delay);
}

// Función para mostrar la modal después de 10 segundos
function showInitialModal() {
  let lastModalTime = localStorage.getItem('lastModalTime');
  if (!lastModalTime || (new Date().getTime() - lastModalTime) > 30 * 60 * 1000) {
    showModal(10000); // Mostrar la modal después de 10 segundos
    localStorage.setItem('lastModalTime', new Date().getTime()); // Almacenar la hora de la última modal
  }
}

// Función para mostrar la modal después de 30 minutos
function showSecondaryModal() {
  let lastModalTime = localStorage.getItem('lastModalTime');
  if (lastModalTime && (new Date().getTime() - lastModalTime) > 30 * 60 * 1000) {
    showModal(0); // Mostrar la modal inmediatamente
    localStorage.setItem('lastModalTime', new Date().getTime()); // Almacenar la hora de la última modal
  }
}

// Llamar a showInitialModal en la carga inicial de la página
showInitialModal();

// Llamar a showSecondaryModal después de 30 minutos
setInterval(showSecondaryModal, 30 * 60 * 1000);

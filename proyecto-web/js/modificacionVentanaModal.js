// Se ejecuta al hacer click en el boton Nuevo y cambia el titulo de la ventana modal que emerge
function modificarTitulo(nuevoTitulo) {
    document.getElementById("exampleModalLongTitle").innerHTML = nuevoTitulo;
}

// Se ejecuta cuando se hace click en el boton Eliminar y cambia el contenido de la ventana modal que emerge
function modificarTexto(nuevoContenido) {
    document.getElementById("contenido-modal-aceptacion").innerHTML = nuevoContenido;
}

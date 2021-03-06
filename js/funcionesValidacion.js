// Función que valida si un campo está vacío
function estaVacio(elemento){
    if(elemento == "") {
        return true;
    }
    else {
        return false;
    }
}

// Función que valida si un campo es numérico
function esNumero(elemento) {
    let valoresAceptados = /^([0-9])*$/;

    if(valoresAceptados.test(elemento)) {
        return true;
    }
    else {
        return false; 
    }
}

function esCaracter(elemento) {

    let valoresAceptados = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/;

    if(valoresAceptados.test(elemento)) {
        return true;
    }
    else {
        return false;
    }
}

function esAlfaNumerico(elemento) {

    let valoresAceptados = /^[ÁÉÍÓÚA-Za-záéíóú0-9]|\+$/;

    if(valoresAceptados.test(elemento)) {
        return true;
    }
    else {
        return false;
    }
}

function esEmail(elemento) {
    let valoresAceptados = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(valoresAceptados.test(elemento)) {
        return true;
    }
    else {
        return false;
    }
}

// Función que limpia los campos del formulario
function limpiarCampos(id_formulario, id_btn_registrar) {
    document.getElementById(id_formulario).reset();
    elemento = document.getElementById(id_btn_registrar);
    elemento.removeAttribute("data-target");
    elemento.removeAttribute("data-toogle");
    elemento.removeAttribute("data-dismiss");
}

function validarRangoFechas(id_fechaInicio, id_fechaFin) {
    let cadenaFechaInicio = document.getElementById(id_fechaInicio).value;
    let cadenaFechaFin = document.getElementById(id_fechaFin).value;

    let fechaIncio = new Date(cadenaFechaInicio);
    let fechaFin = new Date(cadenaFechaFin);

    if(fechaIncio <= fechaFin) {
        return true;
    }
    else {
        return false; 
    }
    
}

function validarRangoHora(id_hora_inicio, id_hora_fin) {

    let horaInicio = document.getElementById(id_hora_inicio).value;
    let horaFin = document.getElementById(id_hora_fin).value;

    console.log(horaInicio);
    console.log(horaFin);

    if(horaInicio < horaFin) {
        return true;
    }
    else {
        return false; 
    }
}

function validarValorMonetario(precio) {
    
    let valoresAceptados = /^[0-9]+(.[0-9]+)?$/;

    if(valoresAceptados.test(precio)) {
        return true;
    }
    else {
        return false;
    }
}
window.onload = alIniciar;

function alIniciar(){
    document.getElementById('registrar').addEventListener('click',validarForm,false);
}


function validarForm(e) {
    
    formasPago = document.getElementById("container-formas-pago").getElementsByTagName("input");

    if ((validarRuc()) && validarNombreEmpresa() && validarEmailEmpresa() && validarHorario() && validarContraseña() &&
        validarTelefonoEmpresa() && validarFormasPago(formasPago)) {
        
        return true;
    }
    else {
        e.preventDefault();
        return false;
    }
}

// Función que alberga las demás funciones para validar RUC
function validarRuc(){
    let elemento = document.getElementById("txt_ruc_empresa").value;

    if(estaVacio(elemento)) {
        alert("El campo RUC está vacío");
        return false;
    }
    else if(esNumero(elemento) == false) {
        alert("El dato " + elemento +" no es numérico");
        return false;
    }
    else if (elemento.length < 13) {
        alert("RUC no válido");
        return false;
    }

    return true;
}

function validarNombreEmpresa(){
    let elemento = document.getElementById("txt_nombre_empresa").value;

    if(estaVacio(elemento)) {
        alert("El campo Nombre Empresa está vacío");
        return false;
    }
    else if (esNumero(elemento)) {
        alert("Nombre de Empresa no válido");
        return false;
    }
    else if (!esAlfaNumerico(elemento)) {
        alert("El campo Nombre Empresa no admite caracteres especiales");
        return false;
    }
    else {
        return true;
    }
}

function validarEmailEmpresa(){
    let elemento = document.getElementById("txt_email_empresa").value;

    if(estaVacio(elemento)) {
        alert("Existen campos vacios");
        return false;
    }
    else if (esEmail(elemento) == false) {
        alert("No es valido el email " + elemento +". Ingrese un email válido");
        return false;
    }
    else {
        return true;
    }
}

function validarTelefonoEmpresa() {
    let elemento = document.getElementById("txt_telefono_empresa").value;

    if(estaVacio(elemento)) {
        alert("Existen campos vacios");
        return false;
    }
    else if (esNumero(elemento) == false) {
        alert("El dato " + elemento + " no es un número");
        return false;
    }
    else if(elemento.length < 7) {
        alert("El número de teléfono " + elemento + " no es válido");
        return false;
    }
    else {
        return true;
    }
}

function validarFormasPago (elemento) {
    
    if(hayFormaPago(elemento) == false) {
        alert("No ha seleccionado una forma de pago");
        return false;
    }
    else {
        return true;
    }
}

function hayFormaPago(elemento) {
    let flag = false;

    for(i = 0; i < elemento.length; i++) {
        if(elemento[i].checked) {
            flag = true;
        }
    }
    return flag;
}

function validarHorario() {
    if(!validarRangoHora('hora-inicio', 'hora-fin')) {
        alert("Horario no válido");
        return false;
    }
    else {
        return true;
    }
}

function validarContraseña() {
    
    contraseña = document.getElementById('password').value;
   
    if(estaVacio(contraseña)) {
        alert("El campo contraseña está vacío");
        return false;
    }
    else {
        return true; 
    }
}
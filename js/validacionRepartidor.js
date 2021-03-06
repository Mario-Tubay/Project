window.onload = alIniciar;

function alIniciar() {
    document.getElementById('enviar').addEventListener('click', validar, false);


}

function validaNombres() {
    let elemento = document.getElementById('nombres');
    var msgvacio = 'error_nombre';
    var expresion = /^[A-Z ' ' áéíóúñüàè]+$/i;
    limpiarError(elemento, msgvacio);

    if (elemento.value == '' || elemento.value == ' ') {
        error(elemento, msgvacio);
        return false;
    } else if (!expresion.test(elemento.value)) {
        error(elemento, msgvacio);
        return false;
    }
    return true;
}

function validaTelefono() {
    let elemento = document.getElementById('telefono');
    let msgvacio = 'error_telefono'
    var expresion = /^(?:\D*\d){10}\D*$/;

    limpiarError(elemento, msgvacio);

    if (elemento.value == '') {
        error(elemento, msgvacio);
        return false;
    } else {
        if (isNaN(elemento.value)) {
            error(elemento, msgvacio);
            return false;
        } else if (!expresion.test(elemento.value)) {
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}

function validaCorreo() {
    let elemento = document.getElementById('correo');
    let msgvacio = 'error_correo'
    var expresion = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

    limpiarError(elemento, msgvacio);

    if (elemento.value == '') {
        error(elemento, msgvacio);
        return false;
    } else {
        if (!expresion.test(elemento.value)) {
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}

function validaTransporte() {
    let elemento = document.getElementById('transporte');
    let msgvacio = 'error_transporte'

    limpiarError(elemento, msgvacio);

    if (elemento.value == 0) {
        error(elemento, msgvacio);
        return false;
    }

    return true;
}

function validaHorario() {
    let elemento = document.getElementById('horario');
    let msgvacio = 'error_horario'

    limpiarError(elemento, msgvacio);

    if (elemento.value == 0) {
        error(elemento, msgvacio);
        return false;
    }

    return true;
}

function validaIdentificacion() {
    let elemento = document.getElementById('identificacion');
    let msgvacio = 'error_identificacion'
    var expresion = /^(?:\D*\d){10}\D*$/;

    limpiarError(elemento, msgvacio);

    if (elemento.value == '') {
        error(elemento, msgvacio);
        return false;
    } else {
        if (isNaN(elemento.value)) {
            error(elemento, msgvacio);
            return false;
        } else if (!expresion.test(elemento.value)) {
            alert('Numero de Identificacion Incompleto');
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}

function validar(e) {
    if (validaNombres() && validaTelefono() && validaIdentificacion() && validaCorreo() && validaTransporte() && validaHorario()) {
        // entornoRepartidor();
        e.preventDefault();
        let tipo = document.getElementById('tipo').value;
        if (tipo == 'insert') {
            ingresoDatos();
        }
        if (tipo == 'login') {
            login();
        }


    } else {
        e.preventDefault();
        console.log("no valida");
        return false;
    }
}

function error(elemento, clase) {

    elemento.focus();
    document.getElementById(clase).style.display = 'block';
}

function limpiarError(elemento, clase) {

    document.getElementById(clase).style.display = 'none';
}

const ingresoDatos = function() {
    let nombre = document.getElementById('nombres').value;
    let cedula = document.getElementById('identificacion').value;
    let correo = document.getElementById('correo').value;
    let telefono = document.getElementById('telefono').value;
    let transporte = document.getElementById('transporte').value;
    let horario = document.getElementById('horario').value;
    let tipo = document.getElementById('tipo').value;
    let pass = document.getElementById('pass').value;
    let tipoTransporte;
    let horarioTiempo;
    if (transporte == 1) {
        tipoTransporte = 'Bicicleta';
    } else if (transporte == 2) {
        tipoTransporte = 'Automovil';
    } else if (transporte == 3) {
        tipoTransporte = 'Motocicleta';
    }

    if (horario == 1) {
        horarioTiempo = 'Matutino';
    } else if (horario == 2) {
        horarioTiempo = 'Vespertino';
    } else if (horario == 3) {
        horarioTiempo = 'Nocturno';
    }

    let datos = new FormData();
    datos.append('nombre', nombre);
    datos.append('cedula', cedula);
    datos.append('correo', correo);
    datos.append('telefono', telefono);
    datos.append('transporte', tipoTransporte);
    datos.append('horario', horarioTiempo);
    datos.append('pass', pass);
    datos.append('tipo', tipo);

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '../html/repartidores.php', true);

    xhr.onload = function() {
        if (this.status === 200) {
            //console.log(xhr.responseText);
            let respuesta = JSON.parse(xhr.responseText);
            if (respuesta.respuesta === 'correcto') {
                alerta('success', 'Exito', 'Se ingresaron los datos correctamente');
                document.getElementById("forms").reset();
                location.href = "../html/login.php";
            }
        }
    }
    xhr.send(datos);

}




function alerta(icon, title, mensaje) {
    Swal.fire({
        icon: `${icon}`,
        title: `${title}`,
        text: `${mensaje}`
    })
}
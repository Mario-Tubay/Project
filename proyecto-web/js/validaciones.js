// Validaciones para Formulario registro de cuenta cliente
window.onload = alIniciar;

function alIniciar(){
    document.getElementById('enviar').addEventListener('click',validar,false);
}

function validaNombres(){
    let elemento = document.getElementById('nombres');
    var msgvacio= 'error_nombre';
    var expresion = /^[A-Z ' ' áéíóúñüàè]+$/i;
    limpiarError(elemento, msgvacio);    

    if(elemento.value == '' || elemento.value ==' '){
        error(elemento, msgvacio);
        return false;
    }
    else if(!expresion.test(elemento.value)){
        error(elemento, msgvacio);
        return false;    
    }
    return true;
}

function validaTelefono(){
    let elemento = document.getElementById('telefono');
    let msgvacio = 'errorTelefono'
    var expresion=/^(?:\D*\d){10}\D*$/;

    limpiarError(elemento, msgvacio);    
    
    if(elemento.value == ''){
        error(elemento, msgvacio);
        return false;
    }
    else{
        if(isNaN(elemento.value)){
            error(elemento, msgvacio);
            return false;
        }
        else if(!expresion.test(elemento.value)){
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}

function validaCorreo(){
    console.log("Hola");
    let elemento = document.getElementById('correo');
    let msgvacio = 'errorCorreo';
    var expresion=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

    limpiarError(elemento, msgvacio);    
    
    if(elemento.value == '' || elemento.value == ' '){
        error(elemento, msgvacio);
        return false;
    }
    else{
        if(!expresion.test(elemento.value)){
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}


function validaIdentificacion(){
    let elemento = document.getElementById('identificacion');
    let msgvacio = 'errorIdentificación'
    var expresion=/^(?:\D*\d){10}\D*$/;

    limpiarError(elemento, msgvacio);    
    
    if(elemento.value == ''){
        error(elemento, msgvacio);
        return false;
    }
    else{
        if(isNaN(elemento.value)){
            error(elemento, msgvacio);
            return false;
        }
        else if(!expresion.test(elemento.value)){
            alert('Numero de Identificacion Incompleto');
            error(elemento, msgvacio);
            return false;
        }
    }
    return true;
}

function validaFormaPago(){
    let elemento = document.getElementById('Fpago');
    let msgvacio = 'errorFormaPago';

    limpiarError(elemento, msgvacio);    
    
    if(elemento.value == 0){
        error(elemento, msgvacio);
        return false;
    }

    return true;
}

function validar(e){

    

    if (validaNombres() && validaTelefono() && validaIdentificacion() && validaCorreo() && validaFormaPago()){
        //entornoRepartidor();
        return true;
    }
    else{
        e.preventDefault();
        return false;
    }
}

function error(elemento, clase){

    elemento.focus();    
    document.getElementById(clase).style.display='block';
}

function limpiarError(elemento, clase){
    
    document.getElementById(clase).style.display='none';
}
window.onload = alIniciar;

function alIniciar(){
    document.getElementById('boton-registar').addEventListener('click',validar,false);
}//end function


function validaNombre(){
    let elemento = document.getElementById('nombres');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Ingrese su Nombre completo');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaUsuario(){
    let elemento = document.getElementById('nombreuser');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Ingrese su Nombre de Usuario');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaEmail(){
    let elemento = document.getElementById('email');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Se requiere ingresar correo electrónico');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaPasswd(){
    let elemento = document.getElementById('contraseña');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Ingrese una Contraseña');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function



function validar(e){
    if (validaNombre()&&validaUsuario() &&validaEmail()&& validaPasswd()){
        return true;
        }else{
        e.preventDefault();
        return ;
        }
}//end function

function error(elemento){
    elemento.focus();
    elemento.style="width:85%;font-size: 15px; "
    elemento.className = 'error';
}

function limpiarError(elemento){
    elemento.className = '';
}

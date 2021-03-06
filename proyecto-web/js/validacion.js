window.onload = alIniciar;

function alIniciar(){
    document.getElementById('iniciarSesion').addEventListener('click',validar,false);
}//end function

function validaEmail(){
    let elemento = document.getElementById('email');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('se requiere ingresar correo electrónico');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaPasswd(){
    let elemento = document.getElementById('password');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('ingrese una contraseña');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function datos(){

    if(datos=='1'){
      location.href ="login.html";
      }
       else {
        location.href="index.html";
      }
    }


function validar(e){
    if (validaEmail()&& validaPasswd()&& datos()){
        return true;
        }else{
        e.preventDefault();
        return ;
        }      
}//end function
     
function error(elemento){
    elemento.focus();
    elemento.className = 'error';
}

function limpiarError(elemento){
    elemento.className = '';
}

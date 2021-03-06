window.onload = alIniciar;

function alIniciar(){
    document.getElementById('buscar').addEventListener('click',validar,false);
}//end function

function validaRef(){
    let elemento = document.getElementById('referencia');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('El Campo referencia es Obligatorio');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaDescrp(){
    let elemento = document.getElementById('descripcion');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('El campo descripcion Obligatorio');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaFchIni(){
    let elemento = document.getElementById('fecDesde');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Establezca la fecha de inicio');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaFchFin(){
    let elemento = document.getElementById('fecHasta');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Establezca la fecha donde desea la busqueda');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validaNoFact(){
    let elemento = document.getElementById('factura');

    limpiarError(elemento);    
    
    if(elemento.value == ''){
        alert('Especifique el numero de Factura');
        error(elemento);
        return false;
    }//end if
    return true;
}//end function

function validar(e){
    if (validaRef() &&validaDescrp()&& validaFchIni() && validaFchFin() &&validaNoFact() &&  datos()){
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

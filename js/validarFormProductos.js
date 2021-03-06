window.onload = alIniciar;

function alIniciar(){
    document.getElementById('btn-registrar').addEventListener('click', validarForm, false);
}


function validarForm(e) {
    
    ofertas = document.getElementById("container-ofertas-descuento").getElementsByTagName("input");

    if (validarNombreProducto() && validarPrecioProducto() && validarOfertas(ofertas) && validarStock()) {
        
        return true;
    }
    else {
        e.preventDefault();
        return false;
    }
}

function validarNombreProducto(){
    let elemento = document.getElementById("txt_producto").value;

    if(estaVacio(elemento)) {
        alert("El campo Nombre Producto está vacío");
        return false;
    }
    else if (esNumero(elemento)) {
        alert("Nombre de Producto no válido");
        return false;
    }
    else if (!esAlfaNumerico(elemento)) {
        alert("El campo Nombre Producto no admite caracteres especiales");
        return false;
    }
    else {
        return true;
    }
}

function validarPrecioProducto() {
    
    let precio = document.getElementById("txt_precio").value;

    if (estaVacio(precio)) {
        alert("El campo Precio está vacío");
        return false;
    }
    else if (esCaracter(precio)) {
        alert("Precio no válido");
        return false;
    }
    else if (!validarValorMonetario(precio)) {
        alert("Precio no válido");
        return false;
    }

    return true;
}

function validarStock() {
    
    let stock = document.getElementById("txt_stock").value;

    if(estaVacio(stock)) {
        alert("El campo Stock está vacio");
        return false;
    }
    else if (esNumero(stock) == false) {
        alert("El valor del campo Stock no es un número");
        return false;
    }
    else {
        return true;
    }

}

function validarOfertas (elemento) {
    
    if(hayOfertas(elemento) == false) {
        alert("No ha seleccionado una oferta de descuento");
        return false;
    }
    else {
        return true;
    }
}

function hayOfertas(elemento) {
    let flag = false;

    for(i = 0; i < elemento.length; i++) {
        if(elemento[i].checked) {
            flag = true;
        }
    }
    return flag;
}
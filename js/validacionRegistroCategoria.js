function validarFormCategoria() {

    if (validarCategoria()) {
        elemento = document.getElementById("btn-registrar");
        crud();
        elemento.setAttribute("data-toggle", "modal"); 
        elemento.setAttribute("data-target", "#modal-aceptacion");
        elemento.setAttribute("data-dismiss", "modal");
        return true;
    } else {
        return false;
    }
}

function validarCategoria() {

    let elemento = document.getElementById("txt_categoria").value;
    console.log(esCaracter(elemento));

    if (esNumero(elemento)) {
        alert("Nombre de Categoría no válida");
        return false;
    }
    else if (estaVacio(elemento)) {
        alert("Existen campos vacíos");
        return false;
    }
    else if(!esCaracter(elemento)) {
        alert("Solo se permiten letras");
        return false;
    }
    else{
        return true;
    }    
}
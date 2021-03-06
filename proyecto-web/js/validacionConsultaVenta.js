function validarConsulta(id_filtro, id_fechaInicio, id_fechaFin, id_texto_busqueda) {

    let combo = document.getElementById(id_filtro);
    let opcion = combo.options[combo.selectedIndex].text;

    if(opcion == "Fecha" || opcion == "Ganancias") {
        validarConsultaFecha(id_fechaInicio, id_fechaFin, id_texto_busqueda);
    }
    else if(opcion == "Cliente" || opcion == "Empresa" || opcion == "Categoría" || opcion == "Producto") {
        validarConsultaFecha(id_fechaInicio, id_fechaFin, id_texto_busqueda);
        validarConsultaTexto(id_texto_busqueda);
    }
    else if(opcion  == "Codigo") {
        validarCodigo(id_texto_busqueda);
    }
    else {
        alert("Datos Ingresados correctamente");
    }

}

function validarConsultaTexto(id_texto_busqueda) {
    let txt_busqueda = document.getElementById(id_texto_busqueda).value;
    console.log(txt_busqueda);

    if(estaVacio(txt_busqueda)) {
        alert("No ha ingresado un dato a buscar");
        return false;
    }
    else if(esNumero(txt_busqueda)) {
        alert("No se puede ingresar número en la búsqueda");
        return false;
    }
    else {
        return true;
    }
}

function validarConsultaFecha(id_fechaInicio, id_fechaFin, id_texto_busqueda) {

    if(validarRangoFechas(id_fechaInicio, id_fechaFin)) {
        return true;
    }
    else {
        alert("Rango de fechas inválido");
        return false;
    }
}

function validarCodigo(id_texto_busqueda) {
    let txt_busqueda = document.getElementById(id_texto_busqueda).value;

    if(estaVacio(txt_busqueda)) {
        alert("Campo vacío");
    }
    else if(!esNumero(txt_busqueda)){
        alert("No se admite letras en la búsqueda");
    }
}

/* El submenu de reporte cada vez que se da click en la opción Reportes del Sidebar*/
function mostrarOpciones(nombreSubMenu) {
    elemento = document.getElementById(nombreSubMenu);
    estiloElemento = window.getComputedStyle(elemento);
    elementoDisplay = estiloElemento.getPropertyValue('display');

    if (elementoDisplay == 'block') {
        elemento.style.display="none";
    }
    else {
        elemento.style.display="block";
    }
}
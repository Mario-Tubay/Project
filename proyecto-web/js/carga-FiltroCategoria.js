const categorias = [
    {id: '1', nombre: 'Tecnología', estado: 'Activo'},
    {id: '2', nombre: 'Electrodomésticos', estado: 'Activo'},
    {id: '3', nombre: 'Comida', estado: 'Activo'},
    {id: '4', nombre: 'Postres', estado: 'Activo'},
    {id: '5', nombre: 'Juguetes', estado: 'Activo'},
]

var fila;

function crud() {
    
    if (document.getElementById('exampleModalLongTitle').innerHTML == "Registrar Nueva Categoría") {
        agregarCategoria();
    }
}

function agregarCategoria() {
    let ultimoId = document.getElementsByTagName("tr");
    let nuevoId = parseInt(ultimoId.length) + 1;
    
    let id = nuevoId;
    let nombre = document.getElementById('txt_categoria').value;

    let datos = document.getElementById('datos-tabla');
    datos.innerHTML += `
        <tr id="${id}">
            <td class="table-datos">${id}</td>
            <td class="table-datos">${nombre}</td>
            <td class="table-datos">Activo</td>
            <td class="table-datos">
                <button class="btn-editar" id="btn-editar" data-toggle="modal" data-target="#modal-nuevo" onclick="limpiarCampos('formulario_registro', 'btn-registrar'), modificarTitulo('Editar Registro')">
                    <i class="ion-md-create"></i> Editar
                </button>
                <button class="btn-eliminar" id="btn-eliminar" data-toggle="modal" data-target="#modal-eliminacion" 
                onclick="modificarTexto('Se ha eliminado correctamente los datos'), captarFila(${id})">
                    <i class="ion-md-trash"></i> Eliminar
                </button>
            </td>
        </tr>
    `
}

function captarFila(id) {
    fila = document.getElementById(id);
}

function eliminarCategoria() {
    fila.remove();
}


function flitrarCategorias() {
    let nombreCategoria = document.getElementById('txt-busqueda-categoria').value.toLowerCase();
    let datosTabla = document.getElementById('datos-tabla');
    datosTabla.innerHTML = "";

    for (let categoria of categorias) {
        let nombre = categoria.nombre.toLowerCase();

        if(nombre.indexOf(nombreCategoria) !== -1) {
            datosTabla.innerHTML += `
            <tr id="${categoria.id}">
                <td class="table-datos">${categoria.id}</td>
                <td class="table-datos">${categoria.nombre}</td>
                <td class="table-datos">${categoria.estado}</td>
                <td class="table-datos">
                    <button class="btn-editar" id="btn-editar" data-toggle="modal" data-target="#modal-nuevo" onclick="limpiarCampos('formulario_registro', 'btn-registrar'), modificarTitulo('Editar Registro')">
                        <i class="icon ion-md-create"></i> Editar
                    </button>
                    <button class="btn-eliminar" id="btn-eliminar" data-toggle="modal" data-target="#modal-eliminacion" 
                    onclick="modificarTexto('Se ha eliminado correctamente los datos'), captarFila(${categoria.id})">
                        <i class="icon ion-md-trash"></i> Eliminar
                    </button>
                </td>
            </tr>
            `     
        }
    }

    if(datosTabla.innerHTML == "") {
        datosTabla.innerHTML = `
            <tr>
                <td class="table-datos"></td>
                <td class="table-datos"></td>
                <td class="table-datos"></td>
                <td class="table-datos">Datos no encontrados</td>
                <td class="table-datos"></td>
                <td class="table-datos"></td>
                <td class="table-datos">
                </td>
            </tr>
        `
    }
}

txt_busqueda = document.getElementById('txt-busqueda-categoria');
txt_busqueda.addEventListener('keyup', flitrarCategorias);
flitrarCategorias()
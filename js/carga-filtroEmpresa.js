const empresas = [
    {id: '1', nombre: 'Tony Corp', ruc: '123456789001', telefono: '4569032', email: 'tonycorp@toni.com', estado: 'Activo'},
    {id: '2', nombre: 'Kfc', ruc: '123456789001', telefono: '4569032', email: 'kfc@mail.com', estado: 'Activo'},
    {id: '3', nombre: 'Pizza hut', ruc: '123456789001', telefono: '4569032', email: 'pizzahut@toni.com', estado: 'Activo'},
    {id: '4', nombre: 'Computron', ruc: '123456789001', telefono: '4569032', email: 'computron@toni.com', estado: 'Activo'},
    {id: '5', nombre: 'Comandato', ruc: '123456789001', telefono: '4569032', email: 'computron@toni.com', estado: 'Activo'},
]

var fila;

function crud() {
    
    if (document.getElementById('exampleModalLongTitle').innerHTML == "Registro de Empresa") {
        agregarEmpresa();
    }
}

function agregarEmpresa() {
    let ultimoId = document.getElementsByTagName("tr");
    let nuevoId = parseInt(ultimoId.length) + 1;
    
    let id = nuevoId;
    let nombre = document.getElementById('txt_nombre_empresa').value;
    let ruc = document.getElementById('txt_ruc_empresa').value;
    let telefono = document.getElementById('txt_telefono_empresa').value;
    let email = document.getElementById('txt_email_empresa').value;

    let datos = document.getElementById('datos-tabla');
    datos.innerHTML += `
        <tr id="${id}">
            <td class="table-datos">${id}</td>
            <td class="table-datos">${nombre}</td>
            <td class="table-datos">${ruc}</td>
            <td class="table-datos">${telefono}</td>
            <td class="table-datos">${email}</td>
            <td class="table-datos">Activo</td>
            <td class="table-datos">
                <button class="btn-editar" id="btn-editar" data-toggle="modal" data-target="#modal-nuevo" onclick="limpiarCampos('formulario_registro', 'btn-registrar'), modificarTitulo('Editar Registro')">
                    <i class="icon ion-md-create"></i> Editar
                </button>
                <button class="btn-eliminar" id="btn-eliminar" data-toggle="modal" data-target="#modal-eliminacion" 
                onclick="modificarTexto('Se ha eliminado correctamente los datos'), captarFila(${id})">
                    <i class="icon ion-md-trash"></i> Eliminar
                </button>
            </td>
        </tr>
    `
}

function captarFila(id) {
    fila = document.getElementById(id);
}

function eliminarEmpresa() {
    fila.remove();
}

function flitrarEmpresas() {
    let nombreEmpresa = document.getElementById('txt-busqueda-empresa').value.toLowerCase();
    let datosTabla = document.getElementById('datos-tabla');
    datosTabla.innerHTML = "";

    for (let empresa of empresas) {
        let nombre = empresa.nombre.toLowerCase();

        if(nombre.indexOf(nombreEmpresa) !== -1) {
            datosTabla.innerHTML += `
            <tr id="${empresa.id}">
                <td class="table-datos">${empresa.id}</td>
                <td class="table-datos">${empresa.nombre}</td>
                <td class="table-datos">${empresa.ruc}</td>
                <td class="table-datos">${empresa.telefono}</td>
                <td class="table-datos">${empresa.email}</td>
                <td class="table-datos">${empresa.estado}</td>
                <td class="table-datos">
                    <button class="btn-editar" id="btn-editar" data-toggle="modal" data-target="#modal-nuevo" 
                    onclick="limpiarCampos('formulario_registro', 'btn-registrar'), modificarTitulo('Editar Registro')">
                        <i class="icon ion-md-create"></i> Editar
                    </button>
                    <button class="btn-eliminar" id="btn-eliminar" data-toggle="modal" data-target="#modal-eliminacion" 
                    onclick="modificarTexto('Se ha eliminado correctamente los datos'), captarFila(${empresa.id})">
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

txt_buqueda = document.getElementById('txt-busqueda-empresa');
txt_buqueda.addEventListener('keyup', flitrarEmpresas);
flitrarEmpresas();
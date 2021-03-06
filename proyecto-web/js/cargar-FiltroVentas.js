const ventas = [
    {
        id: '1', cliente: 'Fausto Vera García', empresa: 'Computron', fecha: '12/01/2021', producto: 'Laptop Lenovo AX', 
        categoria: 'Laptop', cantidad: '1', precio: '800', ganancia: '360'
    },
    {
        id: '2', cliente: 'Lucia Martínez Preciado', empresa: 'Kfc', fecha: '12/01/2021', producto: 'Combo familiar 10 presas', 
        categoria: 'Comida', cantidad: '2', precio: '20', ganancia: '18'
    },
    {
        id: '3', cliente: 'Angela Vásquez Arreaga', empresa: 'Comandato', fecha: '12/01/2021', producto: 'TV Plasma Sony 50 pulgadas', 
        categoria: 'Electrodomésticos', cantidad: '1', precio: '850', ganancia: '382.5'
    },

]

var ganancia = 0;


function flitrarVentas() {
    let nombreUsuario = document.getElementById('txt-busqueda-usuario').value.toLowerCase();
    let datosTabla = document.getElementById('datos-tabla');
    datosTabla.innerHTML = "";

    for (let venta of ventas) {
        let nombre = venta.cliente.toLowerCase();

        if(nombre.indexOf(nombreUsuario) !== -1) {
            datosTabla.innerHTML += `
            <tr>
                <td class="table-datos">${venta.id}</td>
                <td class="table-datos">${venta.cliente}</td>
                <td class="table-datos">${venta.empresa}</td>
                <td class="table-datos">${venta.fecha}</td>
                <td class="table-datos">${venta.producto}</td>
                <td class="table-datos">${venta.categoria}</td>
                <td class="table-datos">${venta.cantidad}</td>
                <td class="table-datos">${venta.precio}</td>
                <td class="table-datos">${venta.ganancia}</td>
            </tr>
            `
            obtenerGanancia(venta);     
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
    ganancia = 0;
}

function obtenerGanancia(venta) {
    ganancia += parseFloat(venta.ganancia);
    document.getElementById('total-ganancia').innerHTML = 'Ganancia Total: ' + '$' + ganancia;
}

txt_busqueda = document.getElementById('txt-busqueda-usuario');
txt_busqueda.addEventListener('keyup', flitrarVentas);
flitrarVentas();
window.onload= aliniciar;

function aliniciar(){
    mostrarPedidos();
}

function SeleccionarEntrega(){
    var det=[].concat(detalle);
    var table = document.getElementsByTagName("table")[0];
    var cells = table.getElementsByTagName("td");       
    for(var i = 1; i < cells.length; i++){
        var cell = cells[i];
        var bandera = 0;
        cell.onclick = function(){
            var columna  = this.cellIndex + 1;      
            var fila = this.parentNode.rowIndex;
            if(det[fila][6]=="pendiente" && confirm("¿Desea repartir el pedido "+det[fila][0]+"?")){
                for(var j = 1; j < fila; j++){
                    if(det[j][6] == "por entregar") bandera=1;
                }                
                if(bandera != 1){
                    det[fila][6]="por entregar";
                    mostrarPedidos();
                }
                else alert("Solo puede entregar un pedido a la vez");
            }
        }
    }
}

var detalle = [["Codigo", "Fecha", "Cliente", "Articulo", "Direccion", "Total a Pagar", "Estado"],
            ["00001", "2021-02-01", "Jose Perez", "Cocina", "Malecon 2000", 200, "pendiente"],
            ["00002", "2021-02-01", "Juan Ordoñez", "Refrigeradora", "29 Y la CH", 240, "entregado"],
            ["00003", "2021-02-13", "Lucia Castro", "Cocina", "Prosperina", 30, "pendiente"],
            ["00004", "2021-02-14", "Kevin Vera", "Cocina", "Martha de Roldos", 20, "entregado"],
            ["00005", "2021-02-24", "Israel Rodriguez", "Cocina", "Las Monjas #503", 45, "entregado"],
            ["00006", "2021-02-14", "Maria Poveda", "Cocina", "Prosperina", 24.6, "pendiente"],
            ["00007", "2021-02-14", "Juan Lino", "Cocina", "Urb. Ciudad Celeste", 87, "entregado"],
            ["00008", "2021-02-17", "Robby Montes", "Cocina", "Daule - Diagonal Tia Centro", 63, "entregado"],
            ["00009", "2021-02-23", "Josseline Sanchez", "Cocina", "Duran - Recreo 1a etp.", 23, "pendiente"],
            ["00010", "2021-02-25", "Erick Limon", "Cocina", "Malecon 2000", 400, "pendiente"],
            ["00011", "2021-02-25", "Christopher Salazar", "Cocina", "La Garzota #604", 17, "pendiente"],
            ["00012", "2021-02-28", "Brando Roman", "Cocina", "Sauces 4 #0045", 29, "pendiente"],
            ["00013", "2021-03-02", "Nadia Mendoza", "Cocina", "Sauces 4 #0005", 22.5, "pendiente"],
            ["00014", "2021-03-02", "Leonela Valero", "Cocina", "Barrio Centenario #654", 76, "pendiente"],
            ["00015", "2021-03-04", "Anggie Rugel", "Cocina", "Artefacta (17 y Portete)", 57, "entregado"],
            ["00016", "2021-03-06", "Kevin Barreno", "Cocina", "Banco Guayaquil (Matriz)", 23, "entregado"],
            ["00017", "2021-03-10", "Moises Jaime", "Cocina", "Mucho Lote #778", 10, "pendiente"],
            ["00018", "2021-03-10", "Lucy Ortega", "Cocina", "Ceibos Norte", 20, "pendiente"],
            ["00019", "2021-03-14", "Maeva Tapia", "Cocina", "Urdesa Central", 87, "pendiente"],
            ["00020", "2021-03-15", "Angelica Tejeda", "Cocina", "Via a la Costa", 100, "pendiente"]];
    
function mostrarPedidos(){        
    var codigoHTML="<table cellpadding="+"2"+" cellspacing="+"0"+"><tbody>";
    for (var i = 0; i < detalle.length; i++){
        codigoHTML+="<tr>";
        for (var j = 0; j < 7; j++) {
            if(i==0) codigoHTML+=" <th class=\"table-cabecera\">"+ detalle[i][j] +"</th>";
            else codigoHTML+=" <td class=\"table-datos\">"+ detalle[i][j] +"</td>";
        }
        codigoHTML+="</li></tr>";
        }
        codigoHTML+="</ul></tbody></table>";
        document.getElementById("pedidos").innerHTML = codigoHTML;
        SeleccionarEntrega(detalle);
}

function entregaRealizada(detalle){      
    if(confirm("Ya entregó el pedido pendiente?")){                
        for (var i = 0; i < detalle.length; i++){
            if(detalle[i][6]=="por entregar"){detalle[i][6]="entregado";break;}                    
        }
        detalle[i][6];
        mostrarPedidos();
    }
}

function validaCliente(){
    let elemento = document.getElementById('nombres');
    limpiarError(elemento, 'error_nombre');    
    if(elemento.value == '' || elemento.value ==' '){
        error(elemento, 'error_nombre');
        elemento.focus();
        return false;
    }
    else if(!/^[A-Z ' ' áéíóúñüàè]+$/i.test(elemento.value)){
        error(elemento, 'error_nombre');
        return false;    
    }
    return elemento.value;
}    

function reporteCliente(det){
    var f=0;
    var array= [];
    var a= validaCliente();
    for(var i=0; i<det.length; i++){
        if(det[i][2].toUpperCase() == a.toUpperCase()){
            array[f]=det[i];
            f=f+1;
        }
    }
    if(f==0){
        error(a, "no_encontrado");
    }
    else{
        mostrarReporte(array,f);
    }    
}

function mostrarReporte(det, fila){
    var codigoHTML="<table cellpadding="+"2"+" cellspacing="+"0"+"><tbody>";
    codigoHTML+="<tr>";
        codigoHTML+=" <th class=\"table-cabecera\">Codigo</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Fecha</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Nombre</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Articulo</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Direccion</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Total a Pagar</th>";
        codigoHTML+=" <th class=\"table-cabecera\">Estado</th>";
    codigoHTML+="</tr>";
    for(var i=0; i < fila; i++){
        codigoHTML+="<tr>";
        for (var j = 0; j < 7; j++) {
            codigoHTML+=" <td class=\"table-datos\">"+ det[i][j] +"</td>";
        }
        codigoHTML+="</tr>";    
    }
    codigoHTML+="</tbody></table>";
    document.getElementById("reporte").innerHTML = codigoHTML;
}

function validaFecha(){   
    let elemento = document.getElementById("fechas");
    var expresion = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    limpiarError(elemento,"no_encontrado");    
    if(elemento.value == ''){
        error(elemento,"no_encontrado");
        return false;
    }
    else if(elemento.matches(expresion.value)){
        alert('Fecha No Válida')
        return false;     
    }
    return elemento.value;
}

function reporteFecha(det){
    var a= validaFecha();
    var f=0;
    var array= [];
    for(var i=0; i<det.length; i++){
        if(det[i][1] == a){
            array[f]=det[i];
            f=f+1;
        }
    }
    if(f==0){
        error(a, "no_encontrado");
    }
    else{
        mostrarReporte(array,f);
    }
}

function validaImporte(){
    let elemento = document.getElementById('importe');
    limpiarError(elemento, "error_importe");
    if(elemento.value == ''){
        error(elemento, "error_importe");
        return false;
    }
    else{
        if(!/^\d*(\.\d{1})?\d{0,1}$/.test(elemento.value)){
            error(elemento, "error_importe");
            return false;
        }
    }
    return elemento.value;
}

function reporteImporte(det){
    var a= validaImporte();
    if(a != false){
        var f=0;
        var array= [];
        for(var i=0; i<det.length; i++){
            if(det[i][5] == a){
                array[f]=det[i];
                f=f+1;
            }
        }
        if(f==0){
            error(a, "no_encontrado");
        }
        else{
            mostrarReporte(array,f);
        }
    }   
}

function error(elemento, clase){
    elemento.className='ingreso';
    document.getElementById(clase).style.display='block';   
}

function limpiarError(elemento, clase){
    elemento.className='ingreso';
    document.getElementById(clase).style.display='none';
}
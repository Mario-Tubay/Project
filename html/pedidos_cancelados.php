<?php include_once('../partials/header_empresa.php') ?>

            <!-- Sección del Contenido de la Página-->
            <section class="contenido-principal" id="contenido-principal">
                <!-- Sección superior -->
                <div class="top-contenido-principal grid-container">
                    <div class="grid-item container-filtro">
                        <label class="p-0">Filtrar por: </label>
                        <select name="container-filtro" id="container-filtro">
                            <option value="Fecha" >Fecha</option>
                            <option value="Codigo">Codigo</option>
                            <option value="Cliente">Cliente</option>
                            <option value="Producto">Producto</option>
                            <option value="Empresa">Empresa</option>
                            <option value="Categoria">Categoria</option>
                        </select>
                    </div>
                    <div class="grid-item container-fechas">
                        <div class="container-fecha-inicio">
                            <label>Desde: </label>
                            <input type="date" name="fecha-inicio" id="fecha-inicio">
                        </div>
    
                        <div class="container-fecha-fin">
                            <label>Hasta: </label>
                            <input type="date" name="fecha-fin" id="fecha-fin">
                        </div>
                    </div>
                    <div class="grid-item container-busqueda">
                        <input type="text" class="txt-busqueda" name="txt-busqueda-usuario" id="txt-busqueda-usuario" placeholder="Ingrese dato a buscar">
                        <div class="conatiner-btn-busqueda">
                            <button class="btn-busqueda" id="btn-busqueda" 
                            onclick="validarConsulta('container-filtro', 'fecha-inicio', 'fecha-fin', 'txt-busqueda-usuario')">
                                <i><i class="ion-md-search"></i></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Fin Sección superior -->  

                <!-- Tabla Pedidos Cancelados -->
                <div class="container-lista">
                    <h2>Reporte de Pedidos Cancelados</h2>
                    <div class="container-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="table-cabecera">Código</th>
                                    <th class="table-cabecera">Cliente</th>
                                    <th class="table-cabecera">Empresa</th>
                                    <th class="table-cabecera">Fecha</th>
                                    <th class="table-cabecera">Producto</th>
                                    <th class="table-cabecera">Categoría</th>
                                    <th class="table-cabecera">Cantidad</th>
                                    <th class="table-cabecera">Precio</th>
                                </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td class="table-datos">1</td>
                                   <td class="table-datos">Guillermo Rivera</td>
                                   <td class="table-datos">Computron</td>
                                   <td class="table-datos">12/01/2021</td>
                                   <td class="table-datos">Laptop Lenovo AX</td>
                                   <td class="table-datos">Laptop</td>
                                   <td class="table-datos">1</td>
                                   <td class="table-datos">800</td>                       
                               </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
                <!-- Fin Tabla Pedidos Cancelados -->
            </section>
            <!-- Sección del Contenido de la Página-->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
        </div>
        <!-- Contenido Al Lado Derecho -->
    </main>

    <!-- Script de javascript -->
    <script src="../js/funcionesValidacion.js"></script>
    <script src="../js/validacionConsultaVenta.js"></script>

<?php include_once('../partials/footer_empresa.php') ?>
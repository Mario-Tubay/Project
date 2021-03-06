<?php include_once('../partials/header_empresa.php') ?>

            <!-- Sección del Contenido de la Página-->
            <section class="contenido-principal" id="contenido-principal">
                <!-- Sección superior -->  
                <div class="top-contenido-principal d-flex">
                    <div class="container-busqueda">
                        <input type="text" class="txt-busqueda" name="txt-busqueda-productos" id="txt-busqueda-productos" 
                        placeholder="Ingrese nombre a buscar">
                        <div class="conatiner-btn-busqueda">
                            <button class="btn-busqueda">
                                <i><i class="icon ion-md-search"></i></i>
                            </button>
                        </div>
                    </div>
                    <div class="container-botones">
                        <button class="btn-nuevo" data-toggle="modal" data-target="#modal-nuevo" id="btn-nuevo" onclick="limpiarCampos('formulario_registro', 'btn-registrar')">
                            <i class="icon ion-md-add"></i>
                            Nuevo
                        </button>
                    </div>
                </div>
                <!-- Sección superior -->  

                <div class="container-lista">
                    <h2>Lista de Productos</h2>

                    <div class="container-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="table-cabecera">Código</th>
                                    <th class="table-cabecera">Nombre</th>
                                    <th class="table-cabecera">Categoría</th>
                                    <th class="table-cabecera">Precio</th>
                                    <th class="table-cabecera">Ofertas</th>
                                    <th class="table-cabecera">Disponibilidad</th>
                                    <th class="table-cabecera">Acciones</th>
                                </tr>
                           </thead>
                           <tbody id="datos-tabla">
                             
                           </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- Sección del Contenido de la Página-->

            <!-- Inicio Footer -->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
            <!-- Fin footer-->
        </div>
        <!-- Contenido Principal -->
    </main>

    <!-- Ventana Modal para Registro de Productos -->
    <div class="modal fade" id="modal-nuevo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registro de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_registro" method="post">
                        <div class="elementos-form">
                            <div class="container-producto">
                                <label>Nombre: </label>
                                <input type="text" name="txt_producto" id="txt_producto">
                            </div>
                            <div class="container-producto">
                                <label>Categoria: </label>
                                <select name="cmb_categoria" id="cmb_categoria">
                                    <option value="Laptop">Laptop</option>
                                    <option value="Celular">Celular</option>
                                </select>
                            </div>
                            <div class="container-producto">
                                <label>Precio: </label>
                                <input type="text" name="txt_precio" id="txt_precio">
                            </div>
                            <div class="container-producto">
                                <label>Ofertas de descuento: </label>
                                <div class="opcion-ofertas" id="container-ofertas-descuento">
                                    <input type="radio" name="oferta_descuento" id="oferta_1">
                                    <label for="oferta_1"> 10%</label> <br>
                                    <input type="radio" name="oferta_descuento" id="oferta_2">
                                    <label for="oferta_2"> 20%</label> <br>
                                    <input type="radio" name="oferta_descuento" id="oferta_3">
                                    <label for="oferta_3"> 40%</label> <br>
                                    <input type="radio" name="oferta_descuento" id="oferta_4">
                                    <label for="oferta_4"> 50%</label> <br>
                                    <input type="radio" name="oferta_descuento" id="oferta_5">
                                    <label for="oferta_5"> 70%</label> <br>
                                    <input type="radio" name="oferta_descuento" id="oferta_6">
                                    <label for="oferta_6"> Sin oferta de descuento</label>
                                </div>
                            </div>
                            <div class="container-producto">
                                <label>Stock: </label>
                                <input type="text" name="txt_stock" id="txt_stock">
                            </div>
                            
                            <div class="container-producto">
                                <label>Seleccione imagen del producto: </label>
                                <input type="file" name="imagen_producto" id="imagen_producto">
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-window-close"></i> Cancelar
                    </button>
                    <button type="button" id="btn-registrar" class="btn btn-primary">
                        <i class="fas fa-check-square"></i> Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para dar dinamismo a la página -->
    <script src="../js/modificacionVentanaModal.js"></script>

<?php include_once('../partials/footer_productos.php') ?>
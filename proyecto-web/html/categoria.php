<?php include_once('../partials/header_empresa.php') ?>

            <!-- Sección del Contenido de la Página-->
            <section class="contenido-principal" id="contenido-principal">
                <!-- Sección superior -->  
                <div class="top-contenido-principal d-flex">
                    <div class="container-busqueda">
                        <input type="text" class="txt-busqueda-categoria" name="txt-busqueda-categoria" id="txt-busqueda-categoria" placeholder="Ingrese categoría a buscar">
                        <div class="conatiner-btn-busqueda">
                            <button class="btn-busqueda">
                                <i><i class="ion-md-search"></i></i>
                            </button>
                        </div>
                    </div>
                    <div class="container-botones">
                        <button class="btn-nuevo" data-toggle="modal" data-target="#modal-nuevo" 
                            id="btn-nuevo-categoria" onclick="limpiarCampos('formulario_registro', 'btn-registrar'), modificarTitulo('Registrar Nueva Categoría')">
                            <i class="ion-md-add"></i>
                            Nuevo
                        </button>
                    </div>
                </div>
                <!-- Sección superior -->  

                <!-- Tabla de Categorias -->
                <div class="container-lista">
                    <h2>Lista de Categorías de Productos</h2>
                    <div class="container-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="table-cabecera">Código</th>
                                    <th class="table-cabecera">Categoría</th>
                                    <th class="table-cabecera">Estado</th>
                                    <th class="table-cabecera">Acciones</th>
                                </tr>
                           </thead>
                           <tbody id="datos-tabla">
                               
                           </tbody>
                        </table>
                    </div>
                </div>
                <!-- Fin Tabla de Categorias -->
            </section>
            <!-- Sección del Contenido de la Página-->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
        </div>
        <!-- Fin Contenido Al Lado Derecho -->
    </main>

    <!-- Ventana Modal para Registro de Categorias -->
    <div class="modal fade" id="modal-nuevo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registro de Categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_registro" method="post">
                        <div class="elementos-form seccion-top">
                            <div class="container-categoria">
                                <label>Categoría: </label>
                                <input type="text" name="txt_categoria" id="txt_categoria">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-window-close"></i> Cancelar
                    </button>
                    <button type="button" id="btn-registrar" class="btn btn-primary" onclick="validarFormCategoria()">
                        <i class="fas fa-check-square"></i> Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de modal Registro -->

    <!-- Mensaje Modal de Información -->
    <div class="container-modal-mensaje modal fade" id="modal-aceptacion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-aceptacion">Información</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body-mensaje">
                    <div class="container-imagen-aceptacion">
                        <img src="../img/icono_aceptacion.png" alt="icono de aceptar">
                        <p id="contenido-modal-aceptacion">Los datos fueron correctamente guardados</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-aceptar" class="btn btn-primary" data-dismiss="modal"
                    onclick="modificarTexto('Los datos fueron correctamente guardados')">
                        <i class="fas fa-check-square"></i> Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de mensaje Modal de Información -->

    <!-- Ventana Modal para Eliminación de categoria -->
    <div class="container-modal-eliminacion modal fade" id="modal-eliminacion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-eliminacion">Elimicación de datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body-mensaje-eliminacion">
                    <p>¿Está seguro que desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-window-close"></i> Cancelar
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-aceptacion" 
                    onclick="eliminarCategoria()" data-dismiss="modal">
                        <i class="fas fa-check-square"></i> Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script de javascript -->
    <script src="../js/carga-FiltroCategoria.js"></script>
    <script src="../js/funcionesValidacion.js"></script>
    <script src="../js/validacionRegistroCategoria.js"></script>
    <script src="../js/modificacionVentanaModal.js"></script>

<?php include_once('../partials/footer_empresa.php') ?>
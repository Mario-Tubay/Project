<?php include_once('../partials/header_administrador.php') ?>
            <!-- Sección del Contenido de la Página-->
            <section class=contenido>
                <div class="form-reporte">
                    <form class="formulario-Reporte">
                        <h1>Reportes de Ganancias</h1>
                         <div class="contenedor-Reporte">                                              
                            Referencia: <input type="text" name="referencia" id="referencia" class="text-report"><br>                                         
                            Descripcion: <input type="text" name="descripcion" id="descripcion" class="text-report"><br>                                          
                            Fecha Desde: <input type="date" name="fecDesde" id="fecDesde" class="fecha"> <br>                       
                            Fecha Hasta: <input type="date" name="fecHasta" id="fecHasta" class="fecha"> <br>           
                            Quitar Devoluciones: <input type="checkbox" name="devolucion" id="devolucion" > <br>   
                            Numero de Factura: <input type="number" name="factura" id="factura" ><br><br>                                       
                            <button type="submit" id="buscar" class="btn-report">Buscar</button>      
                            <button type="reset" id="limpiar" class="btn-report">Borrar Busqueda</button>
                        </div>
                    </form>
                </div>          
            </section>
            <!-- Fin Sección Contenido de la Página-->

            <!-- Inicio Footer -->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
            <!-- Fin footer-->

        </div>
        <!--Fin Contenido Principal -->

    </main>


    <!-- Script para dar dinamismo a la página -->
    <script src="../js/validacionReporte.js"></script>
<?php include_once('../partials/footer_empresa.php') ?>
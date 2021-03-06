<?php include_once('../partials/header_repartidor.php') ?>
            <section class="contenido-principal" id="contenido-principal">
                <div class="contenedor_entrada">
                    <input class="ingreso" type="text" name="nombres" id="nombres" placeholder="Nombre y Apellido del Cliente">
                    <p class="error" id="error_nombre">Nombre No Valido</p>
                    <p class="error" id="no_encontrado">No se ha encontrado en la lista</p>
                    <div class="contenedor_botones">
                        <button type="submit" id="enviar" onclick="reporteCliente(detalle)">Buscar</button>
                        <button id="enviar" onclick="location.reload()">Limpiar</button>
                    </div>
                </div>
                
                <div class="container-lista">
                    <div class="container-table" id="reporte">
                    
                    </div>
                </div>
            </section>
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
        </div>
    </main>

    <!-- Script de javascript -->
    <script src="../js/validacionRepartidor.js"></script>
    <script src="../js/pedidos.js"></script>

<?php include_once('../partials/footer_empresa.php') ?>
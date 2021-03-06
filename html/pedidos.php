<?php include_once('../partials/header_repartidor.php') ?>

            <section class="contenido-principal" id="contenido-principal">
                <div class="container-lista">
                    <div class="contenido-sesion">
                        <h2>Lista de Pedidos</h2>
                        <div class="container-table" id="pedidos">
                        
                        </div>
                    </div>
                    <div>
                        <button id="btn_entrega" onclick="entregaRealizada(detalle)" >ENTREGA</button>
                    </div>
                </div>
            </section>
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
        </div>
    </main>

    <!-- Script de javascript -->
    <script src="../js/pedidos.js"></script>

<?php include_once('../partials/footer_empresa.php') ?>
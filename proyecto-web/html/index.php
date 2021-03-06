<?php include_once('../partials/header_ProductoCliente.php') ?>
            <!-- Contenido Principal -->
            <div class="center">
                <section id="content" class="content">
                    <h2>Productos</h2>
                    <ul class="listProd">
                        <div class="productos" id="productos">
                        </div>
                    </ul>
                </section>
                <aside class="sidebar" id="sidebar">
                    <div id="nav-blog" class="navblog sidebarItem">
                        <h3>Pedido</h3>
                        <table>
                            <thead>
                                <th class="th">Producto</th>
                                <th class="th">Precio</th>
                            </thead>
                            <tbody id="tbody"></tbody>
                        </table>
                        <a href="#" id="btn" onclick="realizarCompra()">
                            <button class="btn btnPrincipal" >
                                <span>Continuar</span>
                                <span id="precio">0.00</span>
                            </button>
                        </a>
                    </div>
                </aside>
                <div class="clearFix"></div>
            </div>
            <!-- Inicio Footer -->
            <footer class="footer m-0">
                <p>&copy; Copyright <?php echo date('Y'); ?>  By Shop Corp. Todos los derechos reservados</p>
            </footer>
            <!-- Fin footer-->        
        </div>
        <!--Fin Contenido Principal -->
    </main>
     <!-- Script para dar dinamismo a la página -->
    <script src="../js/productos.js"></script>
<?php include_once('../partials/footer_cliente.php') ?>

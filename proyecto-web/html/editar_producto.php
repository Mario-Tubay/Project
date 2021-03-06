<?php include_once('../partials/header_empresa.php') ?>

            <!-- Sección del Contenido de la Página-->
            <section class="contenido-principal" id="contenido-principal">
                <!-- Formulario para editar información del Producto -->  
                <form class="formulario-LogReg" method="post">
                    <h1>Editar Producto</h1>
                    <div class="contenedor">

                        <div class="input-contenedor">
                            <i class="fas fa-box icono"></i>
                            <input type="text" name="txt_producto" id="txt_producto" placeholder="Nombre de Producto">
                        </div>
                        
                        <div class="input-contenedor">
                            <p>Categoria</p>
                            <select name="cmb_categoria" id="cmb_categoria" class="select">
                                <option value="Laptop">Laptop</option>
                                <option value="Celular">Celular</option>
                            </select>
                        </div>
                        
                        <div class="input-contenedor">
                            <i class="fas fa-money-bill-alt icono"></i>
                            <input type="text" name="txt_precio" id="txt_precio" placeholder="Ingrese Precio">
                        </div>
                        
                        <div class="input-contenedor">
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
                        
                        <div class="input-contenedor">
                            <i class="fas fa-dolly-flatbed icono"></i>
                            <input type="text" name="txt_stock" id="txt_stock" placeholder="Ingrese Stock">
                        </div>
                            
                        <div class="input-contenedor">
                            <label>Seleccione imagen del producto: </label>
                            <input type="file" name="imagen_producto" id="imagen_producto">
                        </div>
                        
                        <button type="submit" class="button" id="btn-registrar">Actualizar</button>
                    </div>

                    
                </form>
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

<?php include_once('../partials/footer_productos.php') ?>
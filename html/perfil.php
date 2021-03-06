<?php include_once('../partials/header_empresa.php') ?>

            <!-- Sección del Contenido de la Página-->
            <section class="contenido-principal" id="contenido-principal">
                <!-- Formulario de perfil -->   
                <form class="formulario-LogReg">
    
                    <h1>Perfil Empresa</h1>
                     <div class="contenedor">
                     
                        <div class="input-contenedor">
                            <i class="fas fa-id-card icono"></i>
                            <input type="text" name="txt_ruc_empresa" id="txt_ruc_empresa" placeholder="Ingrese RUC">    
                        </div>
            
                        <div class="input-contenedor">
                            <i class="fas fa-building icono"></i>
                            <input type="text" name="txt_nombre_empresa" id="txt_nombre_empresa" placeholder="Ingrese Nombre Comercial">   
                        </div>
                            
                        <div class="input-contenedor">
                            <i class="fas fa-envelope icono"></i>
                            <input type="email" name="txt_email_empresa" id="txt_email_empresa" placeholder="Ingrese Correo Electrónico">   
                        </div>
            
                        <div class="input-contenedor">
                            <i class="fas fa-phone icono"></i>
                            <input type="text" name="txt_telefono_empresa" id="txt_telefono_empresa" placeholder="Ingrese Teléfono">  
                        </div>
                            
                        <div class="input-contenedor">
                            <i class="fas fa-key icono"></i>
                            <input type="password" id="password" placeholder="Contraseña">     
                        </div>
            
                        <div class="input-contenedor">
                            <label>Seleccione horario</label>
                            <div class="elementos-form seccion-bottom">
                                <div class="container-hora-inicio">
                                    <label>Desde: </label>
                                    <input type="time" name="hora-inicio" id="hora-inicio">
                                </div>
                                <div class="container-hora-fin">
                                    <label>Hasta: </label>
                                    <input type="time" name="hora-fin" id="hora-fin">
                                </div>
                            </div>  
                        </div>
            
                        <div class="input-contenedor">
                            <div class="elementos-form container-formas-pago">
                                <label>Formas de pago: </label>
                                <div class="opcion-pago" id="container-formas-pago">
                                    <input type="checkbox" name="forma_pago_1" id="forma_pago_1">  Paypal <br>
                                    <input type="checkbox" name="forma_pago_2" id="forma_pago_2">  Tarjeta de Crédito
                                </div>
                            </div>  
                        </div>
                        
                        <button type="submit" class="button" id="registrar">Actualizar</button>
                    </div>
                </form>
                <!-- Formulario de perfil --> 
            </section>
            <!-- Fin Sección del Contenido de la Página-->

            <!-- Inicio Footer -->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
            <!-- Fin footer -->    
        </div>
        <!-- Contenido Principal -->
    </main>

    <!-- Script de Javascript parra validación y efectos en está página -->
    <script src="../js/funcionesValidacion.js"></script>
    <script src="../js/validacionRegistroEmpresa.js"></script>

<?php include_once('../partials/footer_empresa.php') ?>
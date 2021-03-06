<?php include_once('../partials/header_cliente.php') ?>
            <!-- Contenido Principal -->
            <div class="center">
                <section id="content" class="content">
                    <h2>Califica nuestro servicio</h2>
                    <form class="formCalificacion">
                        <div class="formGroup">
                            <span> Comprensión de mis necesidades de usuario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  </span> 
                            <span class="clasificacion">
                                <input   id="radio1" type="radio"  name="estrellas1" value="1" >
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas1" value="2">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas1" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas1" value="3">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas1" value="4">
                                <label for="radio5">★</label><br>
                            </span>
                        </div>
                        <div class="formGroup">
                            <span> Presentación de nuevos productos y paquetes &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> 
                                <span class="clasificacion">
                                    <input   id="radio6" type="radio"  name="estrellas2" value="6" >
                                    <label for="radio6">★</label>
                                    <input id="radio7" type="radio" name="estrellas2" value="7">
                                    <label for="radio7">★</label>
                                    <input id="radio8" type="radio" name="estrellas2" value="8">
                                    <label for="radio8">★</label>
                                    <input id="radio9" type="radio" name="estrellas2" value="9">
                                    <label for="radio9">★</label>
                                    <input id="radio10" type="radio" name="estrellas2" value="10">
                                    <label for="radio10">★</label>
                                </span>
                        </div>
                        <div class="formGroup">
                            <span> ¿Como calificas nuestro servicio en general? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> 
                                <span class="clasificacion">
                                    <input id="radio11" type="radio"  name="estrellas3" value="11" >
                                    <label for="radio11">★</label>
                                    <input id="radio12" type="radio" name="estrellas3" value="12">
                                    <label for="radio12">★</label>
                                    <input id="radio13" type="radio" name="estrellas3" value="13">
                                    <label for="radio13">★</label>
                                    <input id="radio14" type="radio" name="estrellas3" value="14">
                                    <label for="radio14">★</label>
                                    <input id="radio15" type="radio" name="estrellas4" value="15">
                                    <label for="radio15">★</label>
                                </span>
                        </div>
                        <button class="btn btnPrincipal" onclick="calificacionValida()" > Enviar Calificacion </button>
                    </form>
                </section>
                <script type="text/javascript">
                    function calificacionValida()
                    {
                        alert("Calificacion enviada.!!!");
                    }
                </script>
                <aside class="sidebar" id="sidebar">
                    <div id="nav-blog" class="navblog sidebarItem">
                        <h3>¿Cómo funciona?</h3>
                        <a href="manual.php">Manual</a>
                    </div>
                </aside>
                <div class="clearFix"></div>
            </div>
            <!-- Inicio Footer -->
            <footer class="footer m-0">
                <p>&copy; Copyright 2020 By Shop Corp. Todos los derechos reservados</p>
            </footer>
            <!-- Fin footer-->
        </div>
    <!--Fin Contenido Principal -->
    </main>

<?php include_once('../partials/footer_cliente.php') ?>

    

        

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Corp: Iniciar sesion en el sitio</title>
    <link rel="shortcut icon" href="../img/goods.ico" />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estiloslogin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Lobster&family=Roboto+Slab:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/05f4df98f3.js" crossorigin="anonymous"></script>

    <!-- Fuentes de Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap" rel="stylesheet">
</head>

<body >
    
    <div class="fondo">
        
        <div class="contenedor-login">
            <div class="estructura">
                    <div class="card-header"> 
                        <div class="logo">
                            <i class="fas fa-users"></i>
                        </div> 
                    </div>
                    <div class="card-header-form">
                        <div class="row">
                            <div class="columna columna-50">
                                <form method="post" >
                                    <input type="text" id="user"  placeholder="Nombre de usuario" name="nombreuser" class="usuario"><br>
                                    <input type="password" id="password" placeholder="Contraseña" name="contraseña" class="pass" ><br>
                                    <input type="checkbox" class="check">Recordar nombre de usuario
                                    <input type="hidden" id="tipo" value="login">
                                    <input type="submit" class="submit" value="Acceder" id="acceder">         
                                </form> 
                            </div>
                            <div class="columna columna-50">
                                <p><a class="link" href="registrate.php">¿No tiene cuenta?, Registrate Aqui</a></p>
                                <p class="cookie">Las 'Cookies' deben estar habilitadas en su navegador <i class="fas fa-question-circle"></i></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-login">
            <div class="login-info">
                Usted no se ha identificado. 
            </div>
            <div class="homelink">
                <a href="index.php">Página Principal</a>
            </div>
            <div class="resumen">
                <a href="indexCliente.php">Conócenos más...</a>
            </div>
            <div class="app">
                <a href="https://play.google.com/store/apps/details?id=com.olistshops&hl=es_EC&gl=US">Descargar la app para dispositivos móviles</a>
            </div>
        </div>
    </footer>
    <script src="../js/login.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
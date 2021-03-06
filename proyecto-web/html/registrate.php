<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Corp: Registrate</title>
    <link rel="shortcut icon" href="../img/goods.ico" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estiloslogin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Lobster&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/05f4df98f3.js" crossorigin="anonymous"></script>

    <!-- Fuentes de Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap" rel="stylesheet">
    
</head>
<body class="fondo">
    
     
        <form  action="registrar.php" method="post" class="formulario-LogReg">
        
            <h1>Registrate</h1>
            <img src="../img/goods.png" class="logo-registrar"> 
            <div class="contenedor">
            
                <div class="input-contenedor">
                    <i class="fas fa-user-tie icon"></i>
                    <input type= "text" class="nombres" id="nombres" name="nombres" placeholder="Nombres Completo" >     
                </div>
                    
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type= "text" class="nombreuser" id="nombreuser" name="nombreuser" placeholder="Nombre de Usuario">     
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" class="email" id="email" name="email" placeholder="Correo Electrónico">
                    
                </div>
                    
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" class="contraseña" id="contraseña" name="contraseña" placeholder="Contraseña">     
                </div>
                
                <input type="submit" class="boton-registar"  id="boton-registar" value="Registrate">
                
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>¿Ya tienes una cuenta?<a class="link-regis" href="login.php">Iniciar Sesion</a></p>
            </div>
        </form>
    <script src="../js/validacionRegistro.js"></script>
    
</body>
</html>
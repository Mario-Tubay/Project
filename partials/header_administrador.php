<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN de Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Hojas de Estilo CSS-->
    <link rel="stylesheet" href="../css/estilos_inicioEmpresa.css">
    <link rel="stylesheet" href="../css/estilos_registro.css">
    <link rel="stylesheet" href="../css/estilos_administracion.css">
    <link rel="stylesheet" href="../css/estilos_categoria.css">
    <link rel="stylesheet" href="../css/estilos_contacto.css">
    
    <!-- Links necesarios para el uso de los íconos en la página web -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- Fuentes de Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../img/goods.ico" />
    <title>Inicio</title>
</head>

<body onresize="cambiarPantalla()">

    <main class="main container-fluid m-0 p-0" id="main">
            <!-- Inicio de Sidebar-->
        <nav class="navbar navbar-expand-lg col-2 sidebar-container container-sm" id="navbarToggler">
            <div class="w-100" >
                <!-- Inicio Logo de la Aplicación -->
                <div class="logo-container nav-item" style="margin-top: 1rem;">
                    <div class="logo">
                        <img src="../img/goods.png" alt="logo empresa">
                    </div>
                    <h2 class="text-center text-white">SHOP CORP</h2>
                </div>
                <!-- Fin Logo de la Aplicación -->

                <!-- Opciones del Sidebar-->
                <!-- Enlace Inicio-->
                <a href="inicioAdministrador.php" class="sidebar_item nav-item"><i class="icon ion-md-home"></i> Inicio</a>
                <!-- Enlace Productos-->
                <a href="#" class="sidebar_item nav-item" id="item-reporte" onclick="mostrarOpciones('submenuProductos')">
                    <div class="opcion-reporte nav-item"><i class="fas fa-box"></i> Productos </div> 
                    <div class="flecha-submenu nav-item"><i class="fas fa-caret-down"></i></div>
                </a>
                <ul id="submenuProductos">
                    <li><a href="laptop.php"><i class="fas fa-laptop"></i> Laptops / PCs</a></li>
                    <li><a href="celulares.php"><i class="fas fa-mobile-alt"></i> Celulares / Tablets</a></li>
                    
                </ul>
                <!-- Enlace Administracion-->
                <a href="#" class="sidebar_item nav-item" id="item-reporte" onclick="mostrarOpciones('submenuAdministracion')">
                    <div class="opcion-reporte nav-item"><i class="icon ion-md-stats"></i> Administración </div> 
                    <div class="flecha-submenu nav-item"><i class="fas fa-caret-down"></i></div>
                </a>
                <ul id="submenuAdministracion">
                    <li><a href="revision.php"><i class="fas fa-th-list"></i> Revisión</a></li>
                    <li><a href="cancelar.php"><i class="fas fa-window-close"></i> Cancelación</a></li>
                    <li><a href="aprobado.php"><i class="fas fa-clipboard-check"></i> Aprobación</a></li>
                    <li><a href="reporte.php"><i class="fas fa-file-invoice-dollar"></i> Reportes</a></li>
                </ul>
                <a href="contacto.php" class="sidebar_item"><i class="fas fa-phone"></i> Contacto</a>
                <!-- Fin Opciones del Sidebar-->
            </div>
        </nav>
        <!-- Fin de Sidebar -->

        <!-- Contenido Principal -->
        <div class="contenido-right w-100" id="contenido-right">
            <!-- Header -->
            <div class="header w-100 d-flex">
                <nav class="navbar navbar-expand-lg" id="container-perfil">       
                    <div class="nav-item container-perfil ml-auto">
                        <div class="nav-item dropdown">
                            <a href="login.html" class="nombre-usuario nav-link text-decoration-none">
                                Iniciar Sesión
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Fin Header -->
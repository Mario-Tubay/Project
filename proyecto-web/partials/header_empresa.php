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
    <link rel="stylesheet" href="../css/estilos_reporteventa.css">
    <link rel="stylesheet" href="../css/estilos_loginregister.css">
    <link rel="stylesheet" href="../css/estilos_regProductos.css">
    
    <!-- Links necesarios para el uso de los íconos en la página web -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- Fuentes de Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../img/goods.ico" />
    <title>Empresa</title>

    <style>
        .formulario-LogReg {
            margin-top: 50px;
            margin-bottom: 20px;
        }
    </style>
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
                <a href="inicioEmpresa.php" class="sidebar_item nav-item"><i class="ion-md-home"></i> Inicio</a>
                <a href="productosEmpresa.php" class="sidebar_item nav-item"><i class="fas fa-box"></i> Productos</a>
                <a href="categoria.php" class="sidebar_item nav-item"><i class="ion-md-apps"></i> Categorías</a>
                <a href="#" class="sidebar_item nav-item" id="item-reporte" onclick="mostrarOpciones('submenuReporte')">
                    <div class="opcion-reporte nav-item"><i class="ion-md-stats"></i> Reportes </div> 
                    <div class="flecha-submenu nav-item"><i class="fas fa-caret-down"></i></div>
                </a>
                <ul id="submenuReporte">
                    <li><a href="reporte_venta.php"><i class="fas fa-clipboard-check"></i> Pedidos Completados</a></li>
                    <li><a href="pedidos_cancelados.php"><i class="fas fa-window-close"></i> Pedidos Cancelados</a></li>
                </ul>
                <a href="perfil.php" class="sidebar_item"><i class="ion-md-person"></i> Perfil</a>
                <!-- Fin Opciones del Sidebar-->
            </div>
        </nav>
        <!-- Fin de Sidebar -->

        <!-- Contenido Principal -->
        <div class="contenido-right w-100" id="contenido-right">
            <!-- Header -->
            <div class="header w-100 d-flex">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" id="btn-navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" onclick="displaySideBar()">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="navbar navbar-expand-lg" id="container-perfil">       
                    <div class="nav-item container-perfil ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nombre-usuario nav-link text-decoration-none dropdown-toggle" data-toggle="dropdown">
                                Nombre Usuario
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="perfil.php">Mi Perfil</a>
                                <a class="dropdown-item" href="login.html">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Fin Header -->
<?php 
    $user_session = session();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PROYECTO - FINAL</title>

        <!--ESTILOS CSS-->
        <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        
        <!--JQUERY UI CSS-->
        <link href="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
        
        <!--FONTAWESOME JS-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!--JQUERY-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
        <!--RUSO DATATABLES CSS CDN ACTUAL-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

        <!--RUSO DATATABLES SALVAVIDAS-->
        <link href="<?php echo base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!--DataTable CSS-->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        
        <!--RUSO CHART.JS  CDN ACTUAL-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        
        <!--JQUERY UI JS-->
        <script src="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.js"></script>

        <!--BOOTSTRAP ICONS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <!--GOOGLE FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

        <!--style letras barra lateral-->
        <style>
            
            .barraperfil{
                font-family: 'Josefin Sans', sans-serif;
                color: rgb(255, 51, 204);
            }
            .barralateral{
                font-family: 'Josefin Sans', sans-serif;
                color: white;

            }
            .barralateraldentro{
                font-family: 'Josefin Sans', sans-serif;
                color:white;
            }
        </style>
    </head>
    
    <body class="sb-nav-fixed"  style="background: #f8f9fc">
        <nav class="sb-topnav navbar navbar-expand navbar-red bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 " style="font-family: 'Concert One', cursive;" href="<?php echo base_url() ?>/dashboard">Tienda Virtual</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto  me-3 me-lg-4 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:yellow"><?php echo $user_session->nombre; ?>
                    &nbsp <img src="<?php echo base_url() . '/images/Perfil.png';?>" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end navbar-red bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item barraperfil" href="#">Perfil</a></li>
                        <li><a class="dropdown-item barraperfil" href="<?php echo base_url(); ?>/usuarios/cambia_password">Privacidad</a></li>
                        <li><a class="dropdown-item barraperfil" href="<?php echo base_url(); ?>/configuracion">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item barraperfil" href="<?php echo base_url(); ?>/usuarios/logout">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" >
                            
                            <!--DASHBOARD-->
                            <a class="nav-link barralateral" href="<?php echo base_url() ?>/dashboard">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-heart-fill"></i></div>
                                Dashboard
                            </a>

                            <!--PRODUCTOS-->
                            <a class="nav-link collapsed barralateral" href="#" data-bs-toggle="collapse" data-bs-target="#prod" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon barralateral"><i class="bi bi-shop"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="prod" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url();?>/productos">Productos</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url(); ?>/productos/nuevo">Formulario</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url();?>/unidades">Unidades</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url();?>/categorias">Categorias</a>
                                </nav>
                            </div>

                            <!--CLIENTES-->
                            <a class="nav-link collapsed barralateral" href="#" data-bs-toggle="collapse" data-bs-target="#client" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-hearts"></i></div>
                                Clientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="client" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url();?>/clientes">Clientes</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url(); ?>/clientes/nuevo">Formulario</a>
                                </nav>
                            </div>

                            <!--RECURSOS-->
                            <a class="nav-link collapsed barralateral" href="#" data-bs-toggle="collapse" data-bs-target="#almacen" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-signpost-2"></i></div>
                                Recursos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="almacen" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url(); ?>/compras/nuevo">Nueva compra</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url();?>/compras">Registro de Compras</a>
                                </nav>
                            </div>

                            <!--VENTAS-->
                            <a class="nav-link collapsed barralateral" href="#" data-bs-toggle="collapse" data-bs-target="#ventas" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="bi bi-file-earmark-check"></i></div>
                                Ventas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="ventas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url(); ?>/ventas/venta">Nueva venta</a>
                                    <a class="nav-link barralateraldentro" href="<?php echo base_url(); ?>/ventas">Registro de ventas</a>
                                </nav>
                            </div>

                            <a class="nav-link barralateral" href="<?php echo base_url(); ?>/usuarios">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-up"></i></div>
                                Usuarios
                            </a>

                            <!--<a class="nav-link" href="<?php echo base_url(); ?>/configuracion">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                Configuracion
                                
                            </a>-->
                            
                        </div>
                    </div>
                    <!--<div class="sb-sidenav-footer">
                        <div class="small">Presentado por: Eli Ronnie Quispe Ticona</div><br>
                        <img src="<?php echo base_url() . '/images/sistemas.jfif';?>" class="img-fluid rounded mx-auto d-block">
                   
                    </div>-->
                </nav>
            </div>
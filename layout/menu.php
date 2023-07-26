<?php $url_base="http://localhost/proyectogrupal/"; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EduSearch</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/proyectogrupal/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/proyectogrupal/styles/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="http://localhost/proyectogrupal/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>


<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/proyectogrupal/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <div class="sidebar-brand-text mx-3">EduSearch</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/proyectogrupal/">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Usuario
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>views/universidades/index.php">
                    <i class="bi bi-buildings"></i>
                    <span>Mostrar Universidades</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>views/carreras/index.php">
                    <i class="bi bi-book-fill"></i>
                    <span>Mostrar Carreras</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>views/temario/index.php">
                    <i class="bi bi-archive-fill"></i>
                    <span>Mostrar Temario</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>views/apoyos/index.php">
                    <i class="bi bi-cash-coin"></i>
                    <span>Apoyos</span></a>
            </li>
                          
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>views/contacto/index.php">
                    <i class="bi bi-map"></i>
                    <span>Ubicaciones</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Administrador
            </div>
            <!-- 1 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-building-o"></i>
                    <span>Universidades</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
        
                        <a class="collapse-item" href="<?php echo $url_base;?>views/universidades/index.php">Mostrar</a>
                        <a class="collapse-item" href="<?php echo $url_base;?>views/universidades/add.php">Insertar</a>
                    </div>
                </div>
            </li>
            <!-- 2 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa fa-building-o"></i>
                    <span>Carreras</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
        
                        <a class="collapse-item" href="<?php echo $url_base;?>views/carreras/index.php">Mostrar</a>
                        <a class="collapse-item" href="<?php echo $url_base;?>views/carreras/add.php">Insertar</a>
                    </div>
                </div>
            </li>
            <!-- 3 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fa fa-building-o"></i>
                    <span>Temario</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
        
                        <a class="collapse-item" href="<?php echo $url_base;?>views/temario/index.php">Mostrar</a>
                        <a class="collapse-item" href="<?php echo $url_base;?>views/temario/add.php">Insertar</a>
                    </div>
                </div>
            </li>
            <!-- 4 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fa fa-building-o"></i>
                    <span>Apoyo</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
        
                        <a class="collapse-item" href="<?php echo $url_base;?>views/apoyos/index.php">Mostrar</a>
                        <a class="collapse-item" href="<?php echo $url_base;?>views/apoyos/add.php">Insertar</a>
                    </div>
                </div>
            </li>
            <!-- 5 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fa fa-building-o"></i>
                    <span>Usuario</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
        
                        <a class="collapse-item" href="<?php echo $url_base;?>views/usuarios/index.php">Mostrar</a>
                        <a class="collapse-item" href="<?php echo $url_base;?>views/usuarios/add.php">Insertar</a>
                    </div>
                </div>
            </li>
            <!-- FIN -->
            <hr class="sidebar-divider my-0">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
               <p>Prueba de Mensaje</p>
            </div>

        </ul>
        <!-- End of Sidebar --> 
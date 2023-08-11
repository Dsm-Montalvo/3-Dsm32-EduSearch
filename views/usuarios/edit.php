<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Editar Usuario</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <form action="" method="post">
        <div class="card-body">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Apellido Paterno:</label>
                <input class="form-control" type="text" name="ap_paterno" id="">
                
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Apellido_Materno:</label>
                    <input class="form-control" type="text" name="ap_materno" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Fecha de Nacimiento:</label>
                <input class="form-control" type="date">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Email:</label>
                    <input class="form-control" type="email" name="correo" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Contraseña:</label>
                <input type="password" class="form-control">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Foto de Perfil:</label>
                    <input class="form-control" type="file" name="foto" id="">
                </div>
                
                <div class="col-6">
                    <label class="form-label" for="">Id Estado:</label>
                    <select class="form-select" aria-label="Default select example">
                            <option value="">Selecciona Estado:</option>
                            <option value="">tienda1</option>
                            <option value="">tienda2</option>
                            <option value="">tienda3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Id Municipio:</label>
                    <select class="form-select" aria-label="Default select example">
                            <option value="">Selecciona Municipio:</option>
                            <option value="">tienda1</option>
                            <option value="">tienda2</option>
                            <option value="">tienda3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Id Cargo:</label>
                    <select class="form-select" aria-label="Default select example">
                            <option value="">Selecciona Cargo:</option>
                            <option value="">tienda1</option>
                            <option value="">tienda2</option>
                            <option value="">tienda3</option>
                    </select>
                </div>
            </div>
                    <br>
                    <br>
                        <div class="col-4">
                        <button class="btn btn-success" type="submit">Guardar</button>

            </div>
        </div>
        </form> 

    </div>
    <!-- Page Heading -->

    </div>
    </div>


<?php
include ('./../../layout/footer.php');
?>
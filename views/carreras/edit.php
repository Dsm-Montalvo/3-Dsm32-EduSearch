<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
include ('./../../database/conexion.php');

$sql = "SELECT * FROM carrera WHERE Id_Carrera=".$_REQUEST['Id'];
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Editar Carrera</h6>
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
        <form action="<?=$h->get['base_url'].'/app/models/editar_carreras.php'?>" method="post">
        <div class="card-body">
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['Id_Carrera']; ?>">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre de la Carrera:</label>
                    <input class="form-control" type="text" name="nombrec" value="<?php echo $row['Nom_Carrera']?>">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Duracion:</label>
                <input class="form-control" type="text" name="duracionc" value="<?php echo $row['Duracion']?>">
                
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Tipo:</label>
                    <input class="form-control" type="text" name="tipoc" value="<?php echo $row['Tipo']?>">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Colegiatura:</label>
                <input class="form-control" type="text" name="colegiaturac" value="<?php echo $row['Colegiatura']?>">
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


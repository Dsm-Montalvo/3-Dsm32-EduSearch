<?php
include ('./../../config.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
include ('./../../database/conexion.php');

$sql = "SELECT * FROM municipios WHERE Id_Municipio=".$_REQUEST['Id'];
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
?>
        

        <div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Editar Municipio</h6>
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
        <form action="<?=$h->get['base_url'].'/app/models/editar_municipio.php'?>" method="post">
        <div class="card-body">
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['Id_Municipio']; ?>">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre del Municipio:</label>
                    <input class="form-control" type="text" name="nombrem" value="<?php echo $row['Nom_Municipio']?>">
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
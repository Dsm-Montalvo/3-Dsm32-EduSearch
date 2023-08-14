<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
include ('./../../database/conexion.php');

$sql = "SELECT * FROM temarios WHERE Id_Temario=".$_REQUEST['Id'];
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
?>
        

        <div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Editar temario</h6>
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
        <form action="<?=$h->get['base_url'].'/app/models/editar_temario.php'?>" method="post">
        <div class="card-body">
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['Id_Temario']; ?>">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre del Temario:</label>
                    <input class="form-control" type="text" name="nombret" value="<?php echo $row['Nom_Temario']?>">
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Carrera:</label>
                    <select class="form-select" name="carrerat">
                            <option value="">Selecciona Carrera:</option>
                            <?php 
                                $sql1 = "SELECT * FROM carrera WHERE Id_Carrera=".$row['Id_Carrera1'];
                                $resultado1 = $conexion->query($sql1);

                                $row1 = $resultado1->fetch_assoc();

                                echo "<option selected value='".$row1['Id_Carrera']."'>".$row1['Nom_Carrera']."</option>";

                                $sql2 = "SELECT * FROM carrera";
                                $resultado2 = $conexion->query($sql2);
                                
                                while($Fila = $resultado2->fetch_array()){
                                    echo "<option value='".$Fila['Id_Carrera']."'>".$Fila['Nom_Carrera']."</option>";
                                }
                            ?>
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
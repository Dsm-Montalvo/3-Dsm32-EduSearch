<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
include ('./../../database/conexion.php');

$sql = "SELECT * FROM usuarios WHERE Id_Usuario=".$_REQUEST['Id'];
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
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
        <form action="<?=$h->get['base_url'].'/app/models/editar_usuario.php'?>" method="post">
        <div class="card-body">
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['Id_Usuario']; ?>">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre:</label>
                    <input class="form-control" type="text" name="nombreu" value="<?php echo $row['Nombre'];?>">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Apellido Paterno:</label>
                <input class="form-control" type="text" name="ap_paternou" value="<?php echo $row['Ap_Paterno'];?>">
                
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Apellido_Materno:</label>
                    <input class="form-control" type="text" name="ap_maternou" value="<?php echo $row['Ap_Materno'];?>">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Fecha de Nacimiento:</label>
                <input class="form-control" type="date" name="fechau" value="<?php echo $row['Fecha_Na'];?>">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Email:</label>
                    <input class="form-control" type="email" name="correou" value="<?php echo $row['Email'];?>">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Contraseña:</label>
                <input type="password" class="form-control" name="contraseñau" value="<?php echo $row['Contraseña'];?>">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Foto de Perfil:</label>
                    <input class="form-control" type="file" name="fotou" value="<?php echo $row['Foto_perfil'];?>">
                </div>
                
                <div class="col-6">
                    <label class="form-label" for="">Id Estado:</label>
                    <select class="form-select" name="estadou">
                            <option value="">Selecciona Estado:</option>
                            <?php 
                                $sql1 = "SELECT * FROM estados WHERE Id_Estado=".$row['Id_Estado1'];
                                $resultado1 = $conexion->query($sql1);

                                $row1 = $resultado1->fetch_assoc();

                                echo "<option selected value='".$row1['Id_Estado']."'>".$row1['Nom_Estado']."</option>";

                                $sql2 = "SELECT * FROM estados";
                                $resultado2 = $conexion->query($sql2);
                                
                                while($Fila = $resultado2->fetch_array()){
                                    echo "<option value='".$Fila['Id_Estado']."'>".$Fila['Nom_Estado']."</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Id Municipio:</label>
                    <select class="form-select" name="municipiou">
                            <option value="">Selecciona Municipio:</option>
                            <?php 
                                $sql3 = "SELECT * FROM municipios WHERE Id_Municipio=".$row['Id_Municipio1'];
                                $resultado2 = $conexion->query($sql3);

                                $row3 = $resultado2->fetch_assoc();

                                echo "<option selected value='".$row3['Id_Municipio']."'>".$row3['Nom_Municipio']."</option>";

                                $sql4 = "SELECT * FROM municipios";
                                $resultado4 = $conexion->query($sql4);
                                
                                while($Fila2 = $resultado4->fetch_array()){
                                    echo "<option value='".$Fila2['Id_Municipio']."'>".$Fila2['Nom_Municipio']."</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Id Cargo:</label>
                    <select class="form-select" name="cargou">
                            <option value="">Selecciona Cargo:</option>
                            <?php 
                                $sql5 = "SELECT * FROM cargos WHERE Id_Cargo=".$row['Id_Cargo1'];
                                $resultado3 = $conexion->query($sql5);

                                $row4 = $resultado3->fetch_assoc();

                                echo "<option selected value='".$row4['Id_Cargo']."'>".$row4['descripcion']."</option>";

                                $sql6 = "SELECT * FROM cargos";
                                $resultado5 = $conexion->query($sql6);
                                
                                while($Fila3 = $resultado5->fetch_array()){
                                    echo "<option value='".$Fila3['Id_Cargo']."'>".$Fila3['descripcion']."</option>";
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
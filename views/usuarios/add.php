<?php
include ('./../../test.php');
include ('./../../layout/menu.php');
include ('./../../layout/header.php');
include ('./../../database/conexion.php');
?>

 <div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Alta Usuarios</h6>
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
        <form action="../../app/models/insertar_usuario.php" method="POST">
        <div class="card-body">
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Nombre:</label>
                    <input class="form-control" type="text" name="nombreu" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Apellido Paterno:</label>
                <input class="form-control" type="text" name="ap_paternou" id="">
                
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Apellido_Materno:</label>
                    <input class="form-control" type="text" name="ap_maternou" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Fecha de Nacimiento:</label>
                <input class="form-control" type="date" name="fechau">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Email:</label>
                    <input class="form-control" type="email" name="correou" id="">
                </div>
                
                <div class="col-6">
                <label class="form-label" for="">Contraseña:</label>
                <input type="password" class="form-control" name="contraseñau">
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-6">
                    <label class="form-label" for="">Foto de Perfil:</label>
                    <input class="form-control" type="file" name="fotou" id="">
                </div>
                
                <div class="col-6">
                    <label class="form-label" for="">Estado:</label>
                    <select class="form-select" name="estadou">
                            <option selected disabled>--Selecciona Estado--</option>
                            <?php 
                                $sql = $conexion->query("SELECT * FROM estados");
                                while ($resultado = $sql->fetch_assoc()){
                                    echo "<option value='".$resultado['Id_Estado']."'>" .$resultado
                                    ['Nom_Estado']."</option>";
                                }
                            
                            ?>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Municipio:</label>
                    <select class="form-select" name="municipiou">
                            <option selected disabled>--Selecciona Municipio--</option>
                            <?php 
                                $sql = $conexion->query("SELECT * FROM municipios");
                                while ($resultado = $sql->fetch_assoc()){
                                    echo "<option value='".$resultado['Id_Municipio']."'>" .$resultado
                                    ['Nom_Municipio']."</option>";
                                }
                            
                            ?>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label" for="">Cargo:</label>
                    <select class="form-select" name="cargou">
                            <option selected disabled>--Selecciona cargo--</option>
                            <?php 
                                $sql = $conexion->query("SELECT * FROM cargos");
                                while ($resultado = $sql->fetch_assoc()){
                                    echo "<option value='".$resultado['Id_Cargo']."'>" .$resultado
                                    ['descripcion']."</option>";
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
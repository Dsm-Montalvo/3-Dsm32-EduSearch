<?php 
include ('./../../database/conexion.php');

$sql = $conexion -> query("SELECT * FROM universidades
INNER JOIN tipo_universidad ON universidades.Tipo_universidad1 =tipo_universidad.Id_Tipo
INNER JOIN estados ON universidades.Id_Estado1 = estados.Id_Estado
INNER JOIN municipios ON universidades.Id_Municipio1 = municipios.Id_Municipio
");

?>

<div class="container">
        <div class="row" style="padding: 10px">
		<h3 class="text-center">CRUD imagenes y archivo de PHP y MySQL</h3>
	</div>
 
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Universidades </h1>
                <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i></a>
        </div>
    
    <div class="table-responsive-sm">
		<table class="display table table-bordered" id="mitabla">
                <thead class="table">
                        <tr>
                                <th scope="col">Id de la Universidad</th>
                                <th scope="col">Nombre de la Universidad</th>
                                <th scope="col">Modalidad</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                <?php while($resultado = $sql -> fetch_assoc()){
                ?>
                        <tr>
                                <td><?php echo $resultado['Id_Universidad']?></td>
                                <td><?php echo $resultado['Nom_Universidad']?></td>
                                <td><?php echo $resultado['Modalidad']?></td>
                                <td><?php echo $resultado['Tipo_Nombre']?></td>
                                <td><?php echo $resultado['Nom_Estado']?></td>
                                <td><?php echo $resultado['Nom_Municipio']?></td>
                                <td><a href="<?=$h->get['base_url'].'/views/universidades/edit.php?id='?><?php echo $resultado['Id_Universidad'] ?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/universidades/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="<?=$h->get['base_url'].'/app/models/eliminar_universidad.php?Id='?><?php echo $resultado['Id_Universidad'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>                               
                        </tr>

                <?php
                } 
                ?>
                </tbody>
        </table>
</div>
</div>
 
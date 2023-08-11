<?php 
include ('./../../database/conexion.php');

$sql = $conexion -> query("SELECT * FROM temarios
INNER JOIN carrera ON temarios.Id_Carrera1 =carrera.Id_Carrera
");

?>

<div class="container">
        <div class="row" style="padding: 10px">
		<h3 class="text-center">CRUD imagenes y archivo de PHP y MySQL</h3>
	</div>
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Temarios</h1>
                <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i></a>
    </div>
    
    <div class="table-responsive-sm">
		<table class="display table table-bordered" id="mitabla">
                <thead class="table">
                        <tr>
                                <th scope="col">Id del Temario</th>
                                <th scope="col">Nombre del Temario</th>
                                <th scope="col">Carrera</th>
                                <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                        <?php while($resultado = $sql -> fetch_assoc()){
                        ?>
                                <tr class="">
                                        <td scope="row"><?php echo $resultado['Id_Temario']; ?> </td>
                                        <td><?php echo $resultado['Nom_Temario']; ?></td>
                                        <td><?php echo $resultado['Nom_Carrera']; ?></td>
                                        <td><a href="<?=$h->get['base_url'].'/views/temario/edit.php'?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                        <a href="<?=$h->get['base_url'].'/views/temario/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                        <a href="index.php?id=<?php echo $resultado['Id_Temario']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                                </tr>
                        <?php }?>
                    
                </tbody>
        </table>
</div>
</div>
 
 
<?php 
include ('./../../database/conexion.php');

$sql = $conexion -> query("SELECT * FROM usuarios
INNER JOIN estados ON usuarios.Id_Estado1 = estados.Id_Estado
INNER JOIN municipios ON usuarios.Id_Municipio1 = municipios.Id_Municipio
INNER JOIN cargos ON usuarios.Id_cargo1 =cargos.Id_Cargo
");

?>

<div class="container">

        <div class="row" style="padding: 10px">
		<h3 class="text-center">Sistema de Busqueda de Universidades</h3>
	</div>
   
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
        <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i></a>
    </div>
    
    <div class="table-responsive-sm">
		<table class="display table table-bordered" id="mitabla">
                <thead class="table">
                        <tr>
                                <th scope="col">Id Usuario</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Foto Perfil</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php  while($resultado = $sql -> fetch_assoc()){ ?>
                        <tr class="">
                                <td scope="row"><?php echo $resultado['Id_Usuario']; ?> </td>
                                <td><?php echo $resultado['Nombre']; ?></td>
                                <td><?php echo $resultado['Ap_Paterno']; ?></td>
                                <td><?php echo $resultado['Ap_Materno']; ?></td>
                                <td><?php echo $resultado['Fecha_Na']; ?></td>
                                <td><?php echo $resultado['Email']; ?></td>
                                <td><?php echo $resultado['Contraseña']; ?></td>
                                <td><?php echo $resultado['Foto_perfil']; ?></td>
                                <td><?php echo $resultado['Nom_Estado']; ?></td>
                                <td><?php echo $resultado['Nom_Municipio']; ?></td>
                                <td><?php echo $resultado['descripcion']; ?></td>
                                <td class="col-4"><a href="<?=$h->get['base_url'].'/views/usuarios/edit.php?Id='?><?php echo $resultado['Id_Usuario'] ?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/usuarios/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="<?=$h->get['base_url'].'/app/models/eliminar_usuario.php?Id='?><?php echo $resultado['Id_Usuario'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
        </table>
</div>
</div>
 
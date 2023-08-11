<?php 
include("../../database/conexion.php");

$stm=$conexion->prepare("SELECT 
u.Id_Usuario,
u.Nombre,
u.Ap_Paterno,
u.Ap_Materno,
u.Fecha_Na,
u.Email,
u.Contraseña,
u.Foto_perfil,
Nom_Municipio AS Municipio,
Nom_Estado AS Estado
FROM 
Usuarios u
LEFT JOIN 
Municipios m ON u.Id_Municipio1 = m.Id_Municipio
LEFT JOIN 
Estados e ON u.Id_Estado1 = e.Id_Estado;");
$stm->execute();
$usuarios=$stm->fetchAll(PDO::FETCH_ASSOC);


if (isset($_GET[`Id_Usuario`])){
$txtid=(isset($_GET[`Id_Usuario`])?$_GET[`Id_Usuario`]:"");
$stm=$conexion->prepare("DELETE FROM usuarios where id=:txtid");
$stm->bindParam(":txtid",$txtid);
$stm->execute();
header("location:index.php");   

}
?>

<div class="container-fluid p-0">
   
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
        <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i></a>
    </div>
    
    <div class="table-responsive">
        <table class="table ">
                <thead class="table table-dark">
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
                                <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $usuario) ?>
                        <tr class="">
                                <td scope="row"><?php echo $usuario['Id_Usuario']; ?> </td>
                                <td><?php echo $usuario['Nombre']; ?></td>
                                <td><?php echo $usuario['Ap_Paterno']; ?></td>
                                <td><?php echo $usuario['Ap_Materno']; ?></td>
                                <td><?php echo $usuario['Fecha_Na']; ?></td>
                                <td><?php echo $usuario['Email']; ?></td>
                                <td><?php echo $usuario['Contraseña']; ?></td>
                                <td><?php echo $usuario['Foto_perfil']; ?></td>
                                <td><?php echo $usuario['Municipio']; ?></td>
                                <td><?php echo $usuario['Estado']; ?></td>
                                <td><a href="<?=$h->get['base_url'].'/views/usuarios/edit.php'?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/usuarios/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    <?php ?>
                    <?php foreach($usuarios as $usuario) ?>
                        <tr class="">
                                <td scope="row"><?php echo $usuario['Id_Usuario']; ?> </td>
                                <td><?php echo $usuario['Nombre']; ?></td>
                                <td><?php echo $usuario['Ap_Paterno']; ?></td>
                                <td><?php echo $usuario['Ap_Materno']; ?></td>
                                <td><?php echo $usuario['Fecha_Na']; ?></td>
                                <td><?php echo $usuario['Email']; ?></td>
                                <td><?php echo $usuario['Contraseña']; ?></td>
                                <td><?php echo $usuario['Foto_perfil']; ?></td>
                                <td><?php echo $usuario['Municipio']; ?></td>
                                <td><?php echo $usuario['Estado']; ?></td>
                                <td><a href="<?=$h->get['base_url'].'/views/usuarios/edit.php'?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/usuarios/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    <?php ?>
                    <?php foreach($usuarios as $usuario) ?>
                        <tr class="">
                                <td scope="row"><?php echo $usuario['Id_Usuario']; ?> </td>
                                <td><?php echo $usuario['Nombre']; ?></td>
                                <td><?php echo $usuario['Ap_Paterno']; ?></td>
                                <td><?php echo $usuario['Ap_Materno']; ?></td>
                                <td><?php echo $usuario['Fecha_Na']; ?></td>
                                <td><?php echo $usuario['Email']; ?></td>
                                <td><?php echo $usuario['Contraseña']; ?></td>
                                <td><?php echo $usuario['Foto_perfil']; ?></td>
                                <td><?php echo $usuario['Municipio']; ?></td>
                                <td><?php echo $usuario['Estado']; ?></td>
                                <td><a href="<?=$h->get['base_url'].'/views/usuarios/edit.php'?>" class="btn btn-warning" ><i class="bi bi-brush"></i></a>
                                <a href="<?=$h->get['base_url'].'/views/usuarios/show.php'?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    <?php ?>
                </tbody>
        </table>
</div>
</div>
 
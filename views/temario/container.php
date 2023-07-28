<?php 
include("../../database/conexion.php");

$stm=$conexion->prepare("SELECT * FROM temarios");
$stm->execute();
$temario=$stm->fetchAll(PDO::FETCH_ASSOC);


if (isset($_GET[`Id_Temario`])){
$txtid=(isset($_GET[`Id_Temario`])?$_GET[`Id_Temario`]:"");
$stm=$conexion->prepare("DELETE FROM temarios where id=:txtid");
$stm->bindParam(":txtid",$txtid);
$stm->execute();
header("location:index.php");   

}
?>

<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Proyecto Integrador</strong> Temarios</h1>
    <h2>Muestra de los datos de la tabla de SQL</h2>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Temarios</h1>
        <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i></a>
    </div>
    
    <div class="table-responsive">
        <table class="table ">
                <thead class="table table-dark">
                        <tr>
                                <th scope="col">Id del Temario</th>
                                <th scope="col">Nombre del Temario</th>
                                <th scope="col">Id de la Carrera</th>
                                <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php foreach($temario as $temarios) ?>
                        <tr class="">
                                <td scope="row"><?php echo $temarios['Id_Temario']; ?> </td>
                                <td><?php echo $temarios['Nom_Temario']; ?></td>
                                <td><?php echo $temarios['Id_Carrera1']; ?></td>
                                <td><a href="" class="btn btn-warning">Editar</a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    <?php ?>
                    <?php foreach($temario as $temarios) ?>
                        <tr class="">
                                <td scope="row"><?php echo $temarios['Id_Temario']; ?> </td>
                                <td><?php echo $temarios['Nom_Temario']; ?></td>
                                <td><?php echo $temarios['Id_Carrera1']; ?></td>
                                <td><a href="" class="btn btn-warning">Editar</a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    <?php ?>
                    <?php foreach($temario as $temarios) ?>
                        <tr class="">
                                <td scope="row"><?php echo $temarios['Id_Temario']; ?> </td>
                                <td><?php echo $temarios['Nom_Temario']; ?></td>
                                <td><?php echo $temarios['Id_Carrera1']; ?></td>
                                <td><a href="" class="btn btn-warning">Editar</a>
                                <a href="index.php?id=<?php echo $temarios['Id_Temario']; ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    <?php ?>
                </tbody>
        </table>
</div>
</div>
 
 
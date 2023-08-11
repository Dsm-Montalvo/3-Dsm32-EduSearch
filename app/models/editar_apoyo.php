<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombrea'];
$tipo = $_POST['tipoa'];
$monto = $_POST['montoa'];


$sql = "UPDATE apoyos SET 
            Nom_Apoyo='".$nombre."',
            Tipo_Apoyo='".$tipo."',
            Monto_Apoyo='".$monto."' WHERE Id_Apoyo = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/apoyos/index.php");
}
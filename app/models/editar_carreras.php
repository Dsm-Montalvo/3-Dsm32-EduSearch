<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombrec'];
$duracion = $_POST['duracionc'];
$tipo = $_POST['tipoc'];
$colegiatura = $_POST['colegiaturac'];


$sql = "UPDATE carrera SET 
            Nom_Carrera='".$nombre."',
            Duracion='".$duracion."',
            Tipo='".$tipo."',
            Colegiatura='".$colegiatura."' WHERE Id_Carrera = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/carreras/index.php");
}
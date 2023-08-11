<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombret'];
$carrera = $_POST['carrerat'];


$sql = "UPDATE temarios SET 
            Nom_Temario='".$nombre."',
            Id_Carrera1='".$carrera."' WHERE Id_Temario = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/temario/index.php");
}
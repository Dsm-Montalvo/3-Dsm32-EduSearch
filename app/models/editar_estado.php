<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombree'];


$sql = "UPDATE estados SET 
            Nom_Estado='".$nombre."' WHERE Id_Estado = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/estados/index.php");
}
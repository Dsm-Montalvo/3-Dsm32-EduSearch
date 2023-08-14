<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombrem'];


$sql = "UPDATE municipios SET 
            Nom_Municipio='".$nombre."' WHERE Id_Municipio = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/municipios/index.php");
}
<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombreu'];
$modalidad = $_POST['modalidadu'];
$tipo = $_POST['tipou'];
$estado = $_POST['estadou'];
$municipio = $_POST['municipiou'];

$sql = "UPDATE universidades SET 
            Nom_Universidad='".$nombre."',
            Modalidad='".$modalidad."',
            Tipo_universidad1='".$tipo."',
            Id_Estado1='".$estado."',
            Id_Municipio1='".$municipio."' WHERE Id_Universidad = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/universidades/index.php");
}
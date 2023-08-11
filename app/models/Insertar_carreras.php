<?php
include ("../../database/conexion.php");


$nombre = $_POST['nombrec'];
$duracion = $_POST['duracionc'];
$tipo = $_POST['tipoc'];
$colegiatura = $_POST['colegiaturac'];

$sql = "INSERT INTO carrera (Nom_Carrera,Duracion,Tipo,Colegiatura) VALUES 
('$nombre','$duracion','$tipo','$colegiatura')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/carreras/index.php");
} else{
    echo "Datos No Insertados";
}
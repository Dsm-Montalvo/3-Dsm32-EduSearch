<?php
include ("../../database/conexion.php");

$nombre = $_POST['nombret'];
$carrera = $_POST['carrerat'];


$sql = "INSERT INTO temarios (Nom_Temario,Id_Carrera1) VALUES 
('$nombre','$carrera')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/temario/index.php");
} else{
    echo "Datos No Insertados";
}
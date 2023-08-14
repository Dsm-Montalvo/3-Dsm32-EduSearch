<?php
include ("../../database/conexion.php");

$nombre = $_POST['nombrem'];


$sql = "INSERT INTO municipios (Nom_Municipio) VALUES 
('$nombre')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/municipios/index.php");
} else{
    echo "Datos No Insertados";
}
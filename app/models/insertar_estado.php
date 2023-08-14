<?php
include ("../../database/conexion.php");

$nombre = $_POST['nombree'];


$sql = "INSERT INTO estados (Nom_Estado) VALUES 
('$nombre')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/estados/index.php");
} else{
    echo "Datos No Insertados";
}
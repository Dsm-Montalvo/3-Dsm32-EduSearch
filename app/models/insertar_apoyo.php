<?php
include ("../../database/conexion.php");


$nombre = $_POST['nombrea'];
$tipo = $_POST['tipoa'];
$monto = $_POST['montoa'];

$sql = "INSERT INTO apoyos (Nom_Apoyo,Tipo_Apoyo,Monto_Apoyo) VALUES 
('$nombre','$tipo','$monto')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/apoyos/index.php");
} else{
    echo "Datos No Insertados";
}
<?php
include ("../../database/conexion.php");

$nombre = $_POST['nombreu'];
$modalidad = $_POST['modalidadu'];
$tipo = $_POST['tipou'];
$estado = $_POST['estadou'];
$municipio = $_POST['municipiou'];

$sql = "INSERT INTO universidades (Nom_Universidad,Modalidad,Tipo_universidad1,Id_Estado1,Id_Municipio1) VALUES 
('$nombre','$modalidad','$tipo','$estado','$municipio')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/universidades/index.php");
} else{
    echo "Datos No Insertados";
}
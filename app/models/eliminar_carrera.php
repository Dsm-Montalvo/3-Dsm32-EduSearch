<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM carrera WHERE Id_Carrera = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/carreras/index.php");
}
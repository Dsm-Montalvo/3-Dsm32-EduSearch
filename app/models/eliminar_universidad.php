<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM universidades WHERE Id_Universidad = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/universidades/index.php");
}
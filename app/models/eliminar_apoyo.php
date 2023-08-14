<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM apoyos WHERE Id_Apoyo = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/apoyos/index.php");
}
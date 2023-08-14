<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM estados WHERE Id_Estado = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/estados/index.php");
}
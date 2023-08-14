<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM temarios WHERE Id_Temario = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/temario/index.php");
}
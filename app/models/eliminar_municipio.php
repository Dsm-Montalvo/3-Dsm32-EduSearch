<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM municipios WHERE Id_Municipio = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/municipios/index.php");
}
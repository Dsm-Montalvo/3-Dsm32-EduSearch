<?php 

include("../../database/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM usuarios WHERE Id_Usuario = '$Id'";


$query = mysqli_query($conexion,$sql);
if ($query === true){
    header("location:../../views/usuarios/index.php");
}
<?php 

include_once("../../database/conexion.php");

$id = $_POST['Id'];
$nombre = $_POST['nombreu'];
$ap_paterno = $_POST['ap_paternou'];
$ap_materno = $_POST['ap_maternou'];
$fecha = $_POST['fechau'];
$correo = $_POST['correou'];
$contra = $_POST['contraseñau'];
$foto = $_POST['fotou'];
$estado = $_POST['estadou'];
$municipio = $_POST['municipiou'];
$cargo = $_POST['cargou'];

$sql = "UPDATE usuarios SET 
            Nombre='".$nombre."',
            Ap_Paterno='".$ap_paterno."',
            Ap_Materno='".$ap_materno."',
            Fecha_Na='".$fecha."',
            Email='".$correo."',
            Contraseña='".$contra."',
            Foto_Perfil='".$foto."',
            Id_Estado1='".$estado."',
            Id_Municipio1='".$municipio."',
            Id_Cargo1='".$cargo."' WHERE Id_Usuario = ".$id."";

if($resultado = $conexion->query($sql)){
    header("location:../../views/usuarios/index.php");
}
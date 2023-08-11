<?php
include ("../../database/conexion.php");

$nombre = $_POST['nombreu'];
$ap_paterno = $_POST['ap_paternou'];
$ap_materno = $_POST['ap_maternou'];
$fecha = $_POST['fechau'];
$correo = $_POST['correou'];
$contraseña = $_POST['contraseñau'];
$foto = $_POST['fotou'];
$estado = $_POST['estadou'];
$municipio = $_POST['municipiou'];
$cargo = $_POST['cargou'];

$sql = "INSERT INTO usuarios (Nombre,Ap_Paterno,Ap_Materno,Fecha_Na,Email,Contraseña,Foto_perfil,Id_Estado1,Id_Municipio1,Id_cargo1) VALUES 
('$nombre','$ap_paterno','$ap_materno','$fecha','$correo','$contraseña','$foto','$estado','$municipio','$cargo')";

$resultado = mysqli_query($conexion, $sql);

if($resultado === TRUE){
    header("location:../../views/usuarios/index.php");
} else{
    echo "Datos No Insertados";
}
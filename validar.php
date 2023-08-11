<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","proyecto");

$consulta="SELECT*FROM usuarios where Email='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
if($filas['Id_cargo1']==1){
    header("location:index.php");
}else
if($filas['Id_cargo1']==2){
    header("location:test.php");
}

else{
    ?>
    <?php
    include("prueba.html");
    ?>
    <h1 class="bad">Error en la Autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
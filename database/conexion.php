<?php
$servername = "localhost";
//$port = "8889";
$database = "proyecto";
$username = "root";
$password = "";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/* echo "Connected successfully"; */

$conexion=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
//mysqli_close($conn);
?>
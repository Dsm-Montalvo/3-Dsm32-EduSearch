<?php
include("./../../database/Conexion.php");

/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = $conn->query("SELECT * FROM  carrera LIMIT 10")) {
    printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
    $resultado->close();
}

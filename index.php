<?php

    $conexion=mysqli_connect("localhost","root","","miotrabase");
    $consulta=mysqli_query($conexion,"SELECT * FROM productos");
    var_dump($consulta);
    $filas=mysqli_fetch_object($consulta);
    var_dump($filas);
?>
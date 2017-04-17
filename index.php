<?php

    $conexion=mysqli_connect("localhost","root","","ejemplouno");
    $consulta=mysqli_query($conexion,"select * FROM tablaUno");
    var_dump($consulta);

?>
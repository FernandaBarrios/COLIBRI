<?php
/**
 * Created by PhpStorm.
 * User: Eunkyu
 * Date: 5/13/2017
 * Time: 4:19 PM
 */
    //conectar a base de datos
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "tienda2";

    $conexion = mysqli_connect($server, $user, $password, $bd)
        or die ("Error en la Conexion");
        echo ("Conexion Ejecutada");

    $getnombre = $_POST['Nombre'];
    $query = "SELECT codproducto FROM producto WHERE nombre=$getnombre";

    //update contador
    $insert = "UPDATE visitas SET visitas=visitas+1 WHERE codprod=$codprod";
    $result = mysqli_query($conexion, $insert);

    //show contador
    $show = "SELECT vistas FROM vistas WHERE codprod=$codprod";
    $result2 = mysqli_query($conexion, $show);
    $row = $result2->fetch_assoc();
    $numvista = $row["codcategoria"];
    echo $numvista;
?>
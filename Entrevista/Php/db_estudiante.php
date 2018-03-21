<?php

    include("database.php");

    if($login)
    {
        $nombre = $_POST['name'];
        $lastName = $_POST['lastname'];
        $f_nacimiento = $_POST['fecha'];
        $cur = $_POST['curso'];
        $sec = $_POST['seccion'];
        $s = $_POST['estatus'];

        $query = "INSERT INTO estudiantes (nombre, apellidos, f_nacimiento, id_curso, id_seccion, estado) VALUE ('$nombre', '$lastName', '$f_nacimiento', '$cur', '$sec', '$s')";

        mysqli_query($login, $query);
        mysqli_close($login);

        header("location:../");

    }else{
        echo "db no conectada";
    }


?>
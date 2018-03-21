<?php

    include("database.php");

    if($login)
    {
        $c = $_POST['setCurso'];
        $ids = $_POST['seccion'];

        $query = "INSERT INTO cursos(titulo, id_seccion) VALUES ('$c', '$ids')";
        
        mysqli_query($login, $query);
        mysqli_close($login);

        header("location:../");


    }else {
        echo "db no conectado";
    }

?>
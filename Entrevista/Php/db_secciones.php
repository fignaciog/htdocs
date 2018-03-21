<?php 

    include("database.php");

    if($login)
    {   
        $s = $_POST['setSeccion'];

        $query = "INSERT INTO seccion (titulo) VALUES ('$s')";
        mysqli_query($login, $query);

        mysqli_close($login);

        header("location:../");

    }else{
        echo "db no conectada";
    }

?>
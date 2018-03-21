<?php

    $serverName = "127.0.0.1";
    $userName = "root";
    $userPass = "";
    $dbname = "Estudiante";

    $conn = mysqli_connect($serverName, $userName, $userPass, $dbname);

    if(!$conn)
    {
        echo "Error al conectar DB";
    }else
    {

        if(isset($_POST['setDatos']))
        {

            $name = $_POST['Name'];
            $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            if($_POST['nacionalidad'] == "1")
            {
                $nacio = "Dominicano";
            }else if($_POST['nacionalidad'])
            {
                $nacio = "Haitiano";
            }else{
                $nacio = "Otra...";
            }

            $matricula = $_POST['matricula'];
            
            switch($_POST['Carrera'])
            {
                case "0":
                    $carrera = "No estudia";
                    break;

                case "1":
                    $carrera = "Ingeriero en Informatica";
                    break;

                case "2":
                    $carrera = "Medicina";
                    break;

                case "3":
                    $carrera = "Ingeniero Civil";
                    break;

                case "4":
                    $carrera = "Licenciado en Lengua y Literartura";
                    break;

                default:
                    $carrera = "Sin seleccionar";
                    break;
            }

            $query = "INSERT INTO formulario (nombre, apellidos, edad, nacionalidad, matricula, carrera) VALUES ('$name', '$lastName', '$age', '$nacio', '$matricula', '$carrera');";

            if(mysqli_query($conn, $query))
            {
                echo "<h1>Datos Agregados</h1>";
                mysqli_close($conn);
                header("location:../");
            }else{
                echo "<h1>Datos no ingresados</h1>";
                mysqli_close($conn);
            }

            

        }


    }

?>
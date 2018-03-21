<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script lenguaje="javascript">
        /* Funciones del curso*/
        function cAgregar()
        {
            if(document.frm.setCurso.value.length == 0)
            {
                alert("Debes escribir Curso");
            }else
            {
                var nuevoItem = document.frm.setcurso.value;
                var combo = document.getElementById("Curso");
                var option = document.createElement("option");
                
                combo.options.add(option, 0);
                combo.options[0].value = nuevoItem;
                combo.options[0].innerText = nuevoItem;
                document.frm.curso.value = "";
            }

            
        }
        

        function cEliminar()
        {
            var combo = document.getElementById("Curso");
            combo.remove(document.getElementById("Curso").selectedIndex);
        }

        function cModificar()
        {
            if(document.frm.setCurso.value.length == 0)
            {
                alert("Debes ingresar un Curso");
            }else{
                eliminar();
                agregar();
            }
        }
        
        /* Funciones de la seccion*/
        function sAgregar()
        {
            if(document.frm.setSeccion.value.length == 0)
            {
                alert("Debes escribir una Seccion");
            }else
            {
                var nuevoItem = document.frm.setcurso.value;
                var combo = document.getElementById("Seccion");
                var option = document.createElement("option");
                
                combo.options.add(option, 0);
                combo.options[0].value = nuevoItem;
                combo.options[0].innerText = nuevoItem;
                document.frm.seccion.value = "";
            }

            
        }
        

        function sEliminar()
        {
            var combo = document.getElementById("Seccion");
            combo.remove(document.getElementById("Seccion").selectedIndex);
        }

        function cModificar()
        {
            if(document.frm.setSeccion.value.length == 0)
            {
                alert("Debes ingresar un Curso");
            }else{
                eliminar();
                agregar();
            }
        }

    </script>
    
</head>
<body>

        <!-- <Barra> -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <form action="#" method="post">
            <button type="submit" name="estudiante" class="btn-inline btn btn-secondary">Estudiante</button>
            <button type="submit" name="curso" class="btn-inline btn btn-secondary">Curso</button>
            <button type="submit" name="seccion" class="btn-inline btn btn-secondary">Seccion</button>
         </form>
        </nav>
        <!-- </Barra> -->

        <?php  
            
            if(isset($_POST['estudiante']))
            {
                @include("pag\\estudiante\\index.php");
            }

            if(isset($_POST['curso']))
            {
                @include("pag\\curso\\index.php");
            }

            if(isset($_POST['seccion']))
            {
                @include("pag\\seccion\\index.php");
            }

        ?>

</body>
</html>
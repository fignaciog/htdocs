
<div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Estudiante</h1>
            <!-- <Barra interna> -->
            <ul class="nav">
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#myModaln">Nuevo</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Editar</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Eliminar</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Consultar</a>
                </li>
            </ul>
            <!-- </Barra interna> -->
        </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-12 col-sm-12">
            
<!-- <Vista de Tabla> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Estudiante</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Curso</th>
                        <th>Seccion</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                        include("Php/database.php");
                        $query = "SELECT * FROM estudiantes";
                        
                        $intro = mysqli_query($login, $query);

                        while($ver = mysqli_fetch_assoc($intro))
                        {
                            echo "<tr><td>".$ver['id_estudiante']."</td>";
                            echo "<td>".$ver['nombre']."</td>";
                            echo "<td>".$ver['apellidos']."</td>";
                            echo "<td>".$ver['f_nacimiento']."</td>";
                            echo "<td>".$ver['id_curso']."</td>";
                            echo "<td>".$ver['id_seccion']."</td>";
                            echo "<td>".$ver['estado']."</td></tr>";
                        }

                    ?>
                </tbody>
            </table>
<!-- </Vista de Tabla> -->

        </div>
    </div>

</div>

<?php
    include("estudiante_nuevo.php");
?>
<div class="container bg-secondary text-white mt-2">
        <div class="row">
            <div class="col col-sm col-md col-lg text-center p-5 font-weight-light">
                <h1 class="">Estudiante</h1>
            </div>
        </div>

</div>

<div class="container">
        <div class="row">    
            <div class="col-12 col-sm col-md col-lg">
                 <!-- <Barra interna> -->
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="" class="nav-link d-block" data-toggle="modal" data-target="#myModaln">Nuevo</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link d-block">Editar</a>
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
    <div class="row">
        <div class="table-responsive">
<!-- <Vista de Tabla> -->
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 10px;">ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Nacimiento</th>
                        <th style="width: 10px;">Curso</th>
                        <th style="width: 10px;">Seccion</th>
                        <th style="width: 10px;">Estado</th>
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
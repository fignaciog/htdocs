
<div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Curso</h1>
            <!-- <Barra interna> -->
            <ul class="nav">
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#mCurso">Nuevo</a>
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
                                    <th>ID Curso</th>
                                    <th>Curso</th>
                                    <th>ID Seccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            
                                    include("Php/database.php");
                                    $query = "SELECT * FROM cursos";
                                    
                                    $intro = mysqli_query($login, $query);

                                    while($ver = mysqli_fetch_assoc($intro))
                                    {
                                        echo "<tr><td>".$ver['id_Curso']."</td>";
                                        echo "<td>".$ver['titulo']."</td>   ";
                                        echo "<td>".$ver['id_seccion']."</td></tr>";
                                    }

                                ?>
                            </tbody>
                        </table>
            <!-- </Vista de Tabla> -->

        </div>
    </div>
</div>

<?php
    include("curso_nuevo.php");
?>
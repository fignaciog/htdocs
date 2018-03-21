
<!-- Inicio Modal curso -->
<div class="modal fade" id="mCurso">
    <div class="modal-dialog modal-sm-12">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Curso</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
<form action="Php/db_cursos.php" method="post">
                <div class="form-group">
                    <label for="text">Nuevo</label>
                    <input type="text" class="form-control" name="setCurso" placeholder="Escriba el nuevo Curso aqui...">
                </div>
                
                <div class="form-group">
                    <label for="Seccion">Seccion</label>
                    <select name="seccion" class="form-control">
                        <option value="">Seleccione una Seccion...</option>
                        <?php
                    
                            include("Php/database.php");
                            $query = "SELECT * FROM seccion";
                            
                            $intro = mysqli_query($login, $query);

                            while($ver = mysqli_fetch_assoc($intro))
                            {
                                echo "<option value=".$ver['id_Seccion'].">".$ver['titulo']."</option>";
                            }

                        ?>
                    </select>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Agregar Curso</button>
                </div>
</form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal curso -->
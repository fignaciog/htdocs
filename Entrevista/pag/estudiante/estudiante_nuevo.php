
<!-- The Modal Nuevo-->
  <div class="modal fade" id="myModaln">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

            <!-- Formulario -->
            <form action="Php/db_estudiante.php" method="post">
                <div class="form-group">
                    <label for="Name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="Name">
                </div>

                <div class="form-group">
                    <label for="lastName">Apellidos:</label>
                    <input type="text" class="form-control" name="lastname" id="lastName">
                </div>

                <div class="form-group">
                    <label for="Fecha">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fecha" id="Fecha">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="Curso">Curso</label>
                            <select name="curso" id="Curso" class="form-control">
                                <option value="">Seleccione un Curso...</option>
                                <?php
                    
                                    include("Php/database.php");
                                    $query = "SELECT * FROM cursos";
                                    
                                    $intro = mysqli_query($login, $query);

                                    while($ver = mysqli_fetch_assoc($intro))
                                    {
                                        echo "<option value=".$ver['id_Curso'].">".$ver['titulo']."</option>";
                                    }

                                ?>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="Seccion">Seccion</label>
                            <select name="seccion" id="Seccion" class="form-control">
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
                    </div>
                                    
                <div class="form-group mt-3">
                    <label for="estado">Estado</label>
                    <select name="estatus" id="estado" class="form-control">
                        <option value="0">Activo</option>    
                        <option value="1">Inactivo</option>
                    </select>
                </div>

                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <input type="reset" class="btn btn-warning" value="Limpiar">
                </div>
            
                
            </form>
            <!-- Fin Formulario -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
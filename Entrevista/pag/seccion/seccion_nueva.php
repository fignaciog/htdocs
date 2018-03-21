<!-- Inicio modal Seccion -->
<div class="modal fade" id="mNewseccion">
    <div class="modal-dialog modal-sm-12">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Seccion</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="Php/db_secciones.php" method="post">
                    <div class="form-group">
                        <label for="text">Nueva Seccion</label>
                        <input type="text" class="form-control" name="setSeccion" id="setseccion" placeholder="Escriba la nueva seccion aqui...">
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Agregar Seccion</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin modal Seccion -->
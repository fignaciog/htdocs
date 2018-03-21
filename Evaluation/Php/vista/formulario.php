<div class="container">
        <div class="well well-sm">
            <h1 class="pb-3 display-4">Formulario</h1>

            <form action="Php/controlador.php" method="POST">

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="Name" placeholder="Nombre" required>
                        </div>
                        <div class="form-group col-sm">
                            <label for="lastName">Apellidos:</label>
                            <input type="text" class="form-control"  name="lastName" id="lastName" placeholder="Apellidos" required>
                        </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="form-group col-sm-2">
                        <label for="Age">Edad:</label>
                            <input type="number" class="form-control" name="age" id="Age" required>
                        </div>
                        
                        <div class="form-group col-sm">
                            <label class="nacio">Nacionalidad</label>
                            <select name="nacionalidad" id="" class="custom-select" required>
                                <option value="0">Elige...</option>
                                <option value="1">Dominicano</option>
                                <option value="2">Haitiano</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">
                        
                        <div class="form-group col-sm-3">  
                        <label for="matricula">Matricula:</label>
                            <input type="text" class="form-control" name="matricula" placeholder="" required>
                        </div>

                        <div class="form-group col-sm">
                            <label for="carrera">Carrera:</label>
                            <select name="Carrera" id="carrera" class="custom-select" required>
                                <option value="0" selected>Elige...</option>
                                <option value="1">Ingeniero en Informatica</option>
                                <option value="2">Medicina</option>
                                <option value="3">Ingeniero Civil</option>
                                <option value="4">Licenciado en Lengua y Literartura</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary" name="setDatos">Enviar</button>
            </form>

                            
            
            

        </div>
        
</div>
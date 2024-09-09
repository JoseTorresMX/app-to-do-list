<!-- Tabla referencias de los datos
             Funciona, pero se deja por si las dudas -->
<!--<table class="table">
          <!--<div class="list-group">

          <?php foreach ($resultados as $resultado) { ?>
                    <label class="list-group-item">
                        <input class="form-check-input float-start" type="checkbox" value="" id="" />
                        &nbsp; <span class="float-start">&nbsp;<?php echo $resultado['nombre_tarea']; ?></span>
                        <h6 class="float-start">
                            &nbsp; <a href="?id=<?php echo $resultado['id']; ?>"><span class="badge bg-danger">x</span></a>
                        </h6>
                    </label>
                <?php } ?>
            </div>
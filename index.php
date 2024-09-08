<?php include("db.php"); ?>
<!--Header -->
<?php include("./includes/header.php"); ?>
<div class="container p-4 ">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="guardar_tareas.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="agregar_tarea" class="form-control" placeholder="Agrega una tarea"
                            autofocus>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="enviar_tarea" value="Guardar tarea">
                </form>
            </div>
            <div class="col md-8">
            </div>
        </div>
    </div>
</div>


<!--Footer -->
<?php include("./includes/footer.php"); ?>
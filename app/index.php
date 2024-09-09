<?php
session_start();
require_once("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-8 m-auto">

            <h2 class="display-4 text-center">Lista de Tareas</h2>
            <form class="mt-4" action="index_validaciones.php" method="post">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="tarea_campo"
                        placeholder="Nombre de la tarea">
                </div>
                <br>
                <div class="">
                    <input class="btn btn-success btn-block" type="submit" name="agregar_tareas" value="Agregar">
                </div>
            </form>
        </div>
    </div>
    <!--MMostrar mensaje de alerta sobre tareas removidas -->
    <?php
    if (isset($_SESSION['delete_success'])) { ?>

        <div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
            <?= $_SESSION['delete_success']; ?>
        </div>
        <?php
        unset($_SESSION['delete_success']);

    }

    ?>

    <!-- Mostrar mensajes de alertas sobre tareas actualziadas -->

    <?php
    if (isset($_SESSION['upadate_success'])) { ?>

        <div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
            <?= $_SESSION['upadate_success']; ?>
        </div>



        <?php
        unset($_SESSION['upadate_success']);

    }

    ?>

    <!-- Creando una tabla -->

    <table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3">
        <thead class="bg-dark text-white text-center">
            <tr>
                
                <th>Selecionar</th>
                <th>Tarea</th>
                <th>Alta</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <?php
        require_once "db.php";
        $task_show_query = "SELECT * FROM tareas ORDER BY id DESC";
        $result = $conn->query($task_show_query);
        if ($result->num_rows != 0) {
            
            foreach ($result as $row) {
                $temp_date_time = explode(' ', $row['fecha_creacion']);
                $date = $temp_date_time[0];
                $time = $temp_date_time[1];

                ?>

                <tr>
                    
                    <td></td>
                    <td><?= $row['nombre_tarea'] ?></td>
                    <td><?= $date . ' ' . $time ?></td>



                    <td>
                        <div class="btn-group">
                            <a class="btn btn-sm btn-warning"
                                href="actualizar.php?id=<?php echo base64_encode($row['id']); ?>">Actualizar</a>
                            &nbsp;&nbsp;
                            <a class="btn btn-sm btn-danger"
                                href="borrar.php?id=<?php echo base64_encode($row['id']); ?>">Borrar</a>
                        </div>
                    </td>
                </tr>
                <?php
            }
        }
        //Mostrar "No hay tareas" en caso de que este limpia la base de datos
        else {
            ?>
            <tr>
                <td colspan="20" class="text-center display-4">No task</td>
            </tr>
            <?php
        }
        ?>


    </table>
    <!-- </div>
  </div> -->

    <!-- </div> -->



    </body>

    </html>
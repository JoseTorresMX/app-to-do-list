<?php include("db.php"); ?>
<!--Header -->
<?php include("./includes/header.php"); ?>
<div class="container p-4 ">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="guardar_tareas.php" method="POST" id="formulario">
                    <div class="form-group">
                        <input id="nuevaTarea" type="text" name="agregar_tarea" class="form-control"
                            placeholder="Agrega una tarea" autofocus>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="enviar_tarea" value="Guardar tarea">
                </form>
            </div>
        </div>
        <div class="col md-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Seleccionar</th>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Fecha Alta</th>
                        <th>Fecha Modificación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tareas ORDER BY id DESC";
                    $resltado_tareas = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($resltado_tareas)) { ?>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre_tarea']; ?></td>
                            <td><?php echo $row['fecha_creacion']; ?></td>
                            <td><?php echo $row['fecha_modificacion']; ?></td>
                            <td>
                                <a href="editar_tareas.php?id=<?php echo $row['id']; ?>" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-database-edit" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />
                                        <path d="M4 6v6c0 1.657 3.582 3 8 3c.478 0 .947 -.016 1.402 -.046" />
                                        <path d="M20 12v-6" />
                                        <path d="M4 12v6c0 1.526 3.04 2.786 6.972 2.975" />
                                        <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
                                    </svg>
                                </a>
                                <a href="borrar_tareas.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eraser"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3" />
                                        <path d="M18 13.3l-6.3 -6.3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!--Footer -->
<?php include("./includes/footer.php"); ?>
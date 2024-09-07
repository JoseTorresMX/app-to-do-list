<?php include("./apps/todolist_fall/agregar_tarea.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <title>AppWebReactiva | To-Do List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        <br>
        <div class="card">
            <div class="card-header">Mi lista de tareas</div>
            <div class="card-body">

                <div class="mb-3">
                    <form action="" method="post">
                        <label for="tarea" class="form-label">Tarea:</label>
                        <input type="text" class="form-control" name="tarea" i d="tarea" aria-describedby="helpId"
                            placeholder="Agregar nueva tarea" />
                        <br>
                        <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="submit"
                            value="Agregar tarea" />
                    </form>
                </div>
                <div class="list-group">
                    <?php foreach ($resultados as $resultado) { ?>
                        <label class="list-group-item">
                            <input class="form-check-input float-start" type="checkbox" value="" id="" />
                            &nbsp; <span class="float-start">&nbsp;<?php echo $resultado['nombre_tarea']; ?></span>
                            <h6 class="float-start">
                                &nbsp; <a href="?id=<?php echo $resultado['id']; ?>"><span
                                        class="badge bg-danger">x</span></a>
                            </h6>
                        </label>

                    <?php } ?>
                </div>
                <div class="table-responsive-lg">
                    <?php foreach ($resultados as $resultado) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Seleccionar</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tarea</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Fec. Creación</th>
                                    <th scope="col">Fec. Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row"></td>
                                    <td><?php echo $resultado['id']; ?></td>
                                    <td scope="row"><?php echo $resultado['nombre_tarea']; ?></td>
                                    <td scope="row"><?php echo $resultado['completada']; ?></td>
                                    <td scope="row"><?php echo $resultado['fecha_creacion']; ?></td>
                                    <td scope="row"><?php echo $resultado['fecha_modificacion']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>

            </div>
            <div class="card-footer text-muted"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
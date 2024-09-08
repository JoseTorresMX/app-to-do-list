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
    <link rel="stylesheet" href="">
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
                        <input type="text" class="form-control" name="tarea" id="tarea" aria-describedby="helpId"
                            placeholder="Agregar nueva tarea" />
                        <br>
                        <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="submit"
                            value="Agregar tarea" />
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Seleccionar</th>
                            <th>ID</thscope=>
                            <th>Tarea</th>
                            <th>Alta</th>
                            <th>Modificación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php foreach ($resultados as $resultado) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        </label>
                                    </div>
                                </td>
                                <td><?php echo $resultado['id']; ?></td>
                                <td class="tachas"><?php echo $resultado['nombre_tarea']; ?></td>
                                <td><?php echo $resultado['fecha_creacion']; ?></td>
                                <td><?php echo $resultado['fecha_modificacion']; ?></td>
                                <td><i><a href="?id=<?php echo $resultado['id']; ?>"><span
                                                class="badge text-bg-danger">Eliminar</span></a></i>
                                    <i><a href="?id=<?php echo $resultado['id']; ?>"><span
                                                class="badge text-bg-warning">Acualizar</span></a></i>
                                    <?php echo $resultado['completada']; ?>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--<div class="card-footer text-muted"></div>-->
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
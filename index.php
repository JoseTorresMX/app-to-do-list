<?php include "db_config.php"; ?>
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
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book"
                            width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                            <path d="M10 16h6" />
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M4 8h3" />
                            <path d="M4 12h3" />
                            <path d="M4 16h3" />
                        </svg>
                        Lista de Tareas
                    </a>
                </div>
            </nav>
            <div class="card-body">
                <div class="mb-3">
                    <form action="" method="post">
                        <label for="tarea" class="form-label">Ingresa nombre de la tarea:</label>
                        <input type="text" class="form-control" name="tarea" id="tarea" aria-describedby="helpId"
                            placeholder="Titulo de la tarea" />
                        <br>
                        <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="submit"
                            value="Agregar tarea" />
                    </form>
                </div>
                <ul class="list-group">
                    <?php foreach ($registros as $registro) { ?>
                        <li class="list-group-item">
                            <input class="form-check-input float-start" type="checkbox" value="" id="" checked />
                            <span class="float-start"><?php echo $registro['nombre_tarea']; ?></span>
                            <h6 class="float-start">
                                &nbsp; &nbsp; <a href="?id=<?php echo $registro['id']; ?>"><span class="badge bg-danger">Borrar</a>
                            </h6>
                        </li>
                    <?php } ?>
                </ul>
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
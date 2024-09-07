<?php include("agregar_tarea.php"); ?>
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
                        <label for="" class="form-label">Tarea:</label>
                        <input type="text" class="form-control" name="tarea" id="tarea" aria-describedby="helpId"
                            placeholder="Agregar nueva tarea" />
                        <br>
                        <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="submit"
                            value="Agregar tarea" />
                    </form>
                </div>
                <div class="list-group">
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Tarea 1 
                        <h6 class="float-start">
                            <span class="badge bg-danger">x</span>
                        </h6>
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Tarea 2

                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Tarea 3
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Tarea 4
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Tarea 5
                    </label>
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
<?php include('./apps/todolist_fall/agregar_tarea.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header></header>
    <main class="container">
        <div class="card">
            <div class="card-header"> Lista de tareas</div>
            <div class="card-body">
                <div class="mb-3">
                    <form action="" method="POST">
                        <label for="tarea" class="form-control" name="tarea" id="tarea"
                            placeholder="Agregar nueva tarea"></label>
                        <input class="btn btn-primary" type="text">
                    </form>

                </div>
            </div>


        </div>
    </main>
    <footer></footer>
</body>

</html>
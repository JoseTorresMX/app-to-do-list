
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-DO List App | Jose Torres</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
<div class="container">
        <h1>Mi Lista de Tareas</h1>
        
        <!-- Formulario para añadir tarea -->
        <form id="task-form">
            <input type="text" id="task-input" placeholder="Introduce una nueva tarea" required>
            <button type="submit">Añadir Tarea</button>
        </form>

        <!-- Lista de tareas -->
        <div id="task-list">
            <!-- Las tareas se cargarán dinámicamente aquí -->
        </div>
    </div>

    <!-- Modal para editar tarea -->
    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Editar Tarea</h2>
            <form id="edit-task-form">
                <input type="text" id="edit-task-input" required>
                <input type="hidden" id="edit-task-id">
                <button type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
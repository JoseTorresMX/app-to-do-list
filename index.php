<?php
require 'config/database.php';

// Obtener todas las tareas
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body>
    <h1>Todo List</h1>
    <p>by Jose Angel Torres Santos</p>
    <form action="actions/create.php" method="POST">
        <input type="text" name="name" placeholder="Nueva tarea" required>
        <button type="submit">Agregar</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <form action="actions/update.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <input type="checkbox" name="completed" <?= $task['completed'] ? 'checked' : '' ?>
                        onchange="this.form.submit()">
                    <span style="<?= $task['completed'] ? 'text-decoration: line-through;' : '' ?>">
                        <?= htmlspecialchars($task['name']) ?>
                    </span>
                </form>
                <form action="actions/delete.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
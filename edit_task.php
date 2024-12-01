<?php
header('Content-Type: application/json');
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['id'] ?? null;
    $newTaskName = $_POST['task'] ?? '';

    if ($taskId !== null && !empty($newTaskName)) {
        try {
            $stmt = $pdo->prepare('UPDATE tasks SET name = :name WHERE id = :id');
            $stmt->execute(['name' => $newTaskName, 'id' => $taskId]);
            
            $stmt = $pdo->prepare('SELECT * FROM tasks WHERE id = :id');
            $stmt->execute(['id' => $taskId]);
            $task = $stmt->fetch();
            
            echo json_encode($task);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
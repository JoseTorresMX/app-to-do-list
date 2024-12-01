<?php
header('Content-Type: application/json');
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskName = $_POST['task'] ?? '';

    if (!empty($taskName)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO tasks (name) VALUES (:name)');
            $stmt->execute(['name' => $taskName]);
            
            $taskId = $pdo->lastInsertId();
            $task = [
                'id' => $taskId,
                'names' => $taskName,
                'completed' => 0
            ];
            
            echo json_encode($task);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
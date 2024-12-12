<?php
header('Content-Type: application/json');
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['id'] ?? null;
    $completed = $_POST['completed'] ?? 0;

    if ($taskId !== null) {
        try {
            $stmt = $pdo->prepare('UPDATE tasks SET completed = :completed WHERE id = :id');
            $stmt->execute(['completed' => $completed, 'id' => $taskId]);
            
            $stmt = $pdo->prepare('SELECT * FROM tasks WHERE id = :id');
            $stmt->execute(['id' => $taskId]);
            $task = $stmt->fetch();
            
            echo json_encode($task);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
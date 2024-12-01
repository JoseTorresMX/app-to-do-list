<?php
header('Content-Type: application/json');
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['id'] ?? null;

    if ($taskId !== null) {
        try {
            $stmt = $pdo->prepare('DELETE FROM tasks WHERE id = :id');
            $stmt->execute(['id' => $taskId]);
            
            echo json_encode(['success' => true]);
        } catch (PDOException $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}

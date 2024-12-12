<?php
header('Content-Type: application/json');
require 'config.php';

try {
    $stmt = $pdo->query('SELECT * FROM tasks ORDER BY created_at DESC');
    $tasks = $stmt->fetchAll();
    echo json_encode($tasks);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
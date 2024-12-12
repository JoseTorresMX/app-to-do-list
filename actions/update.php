<?php
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $completed = isset($_POST['completed']) ? 1 : 0;

    $stmt = $pdo->prepare("UPDATE tasks SET completed = :completed WHERE id = :id");
    $stmt->execute(['completed' => $completed, 'id' => $id]);
}

header("Location: ../index.php");

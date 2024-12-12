<?php
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $stmt = $pdo->prepare("INSERT INTO tasks (name) VALUES (:name)");
    $stmt->execute(['name' => $name]);
}

header("Location: ../index.php");

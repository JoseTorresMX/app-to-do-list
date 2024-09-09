<?php
$hostname = "localhost";
$username = "root";
$passwd = "";
$dbname = "todolist";

$conn = new mysqli($hostname, $username, $passwd, $dbname);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
//echo "conexion correcta";
<?php
$servername = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'todolist';

//Creando conexión
$conn = new mysqli($servername, $username, $passwd, $dbname);

//Validando conexxión
if ($conn->connect_error) {
    die("Conexión fallida:" . $conn->connect_error);
}
echo ("Conexión exitosa");

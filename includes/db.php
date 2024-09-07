<?
//Variables de entorno para el servidor
$host = 'localhost';
$user = 'root';
$passwd = '';
$db = 'todolist';

try {
    $conn = new mysqli($host, $user, $passwd, $db);
} catch (Exception $e) {
    echo 'Errore de conexión' . $e->getMessage() . '';
}

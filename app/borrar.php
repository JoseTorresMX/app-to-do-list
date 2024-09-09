<?php include("db.php");
if (isset($_GET["id"])) {
    $id = ($_GET['id']);
    $uery = "DELETE FROM tareas WHERE id=$id";
    //$del_query;
    $sentencia = mysqli_query($conn,$query);
    if ($sentencia) {
        $_SESSION['delete_succes'] = "Tarea removidad correctamente";
    }
    header("Location: index.php");
} else {
    header("Location: index.php");
}
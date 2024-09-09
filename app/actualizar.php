<?php
session_start();
require_once 'db.php';
$id = $_GET['id'];
$datos = "SELECT * FROM tareas WHERE id=$id";
$datos_de_bd = $conn->query($datos);
$resultados = $datos_de_bd->fetch_assoc();

if (isset($_POST['actualizar'])) {
    $actualizar_tarea = $_POST['actualzar_texto'];
    $actualizar_query = "UPDATE tareas SET nombre_tarea='$actulizar_tarea' WHERE id=$id";
    $actualizar_db = $conn->query($actualizar_query);
    if ($actualizar_db) {
        $_SESSION['update_success'] = "Tarea actulizada correctamente";
    }
    header('location: index.php');
}
?>

<?php
require_once 'header.php';
?>
<div class="container">
    <div class='row'>

        <div class='col-8 mx-auto mt-5'>
            <h2 class="display-4 mx-auto mt-2 text-center">Actualizar tarea</h2>
            <form class="" action="" method="post">
                <div class='form-group'>
                    <input class="form-control form-control-lg" type="text" name="actualzar_texto"
                        value="<?= $f_result['nombre_tarea'] ?>">
                </div>
                <div class='form-group'>
                    <input class="btn btn-warning btn-block" type="submit" name="actualizar" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
<?php
include("db.php");
$titulo = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tareas WHERE id=$id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $titulo = $row['nombre_tarea'];
    }
}
if (isset($_POST['actualizar_tarea'])) {
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];

    $query = "UPDATE tareas SET nombre_tarea='$titulo' WHERE id=$id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Tarea acualizada correctamente';
    $_SESSION['message_type'] = 'info';
    header("Location: index.php");
}
?>
<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar_tareas.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>" class="form-control"
                            placeholder="Actulizar titulo">
                    </div>
                    <br>
                    <button class="btn btn-success" name="actualizar_tarea">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
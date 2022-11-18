<html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>


<?php
include_once '../base_datos/conexion.php';
Conexion::connectar();
include_once "../base_datos/usuarios.php";

if (isset($_POST['iniciar'])) {
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $obj = new usuarios();
    $condicion = "Correo='$correo' and Contrasena='$contra'";
    if ($obj->loginuser($condicion) == 1) {
?>
        <script>
            Swal.fire(
                'Correcto',
                'Seccion iniciada',
                'success'
            ).then(function() {
                window.location = "../Productos/diseño_producto.php";
            });
        </script>
<?php


        session_start();
        $_SESSION['usuario'] = $correo;

        exit();
    }
}
if (isset($_POST['registrar'])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra1 = $_POST['contra1'];
    $contra2 = $_POST['contra1'];

    $obj = new usuarios();
    $sentencia = "'$nombre','$contra1','$contra2','$correo'   ";

    $obj->insertar('usuarios', $sentencia);
}


?>
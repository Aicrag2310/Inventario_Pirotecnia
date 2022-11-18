
<?php
include_once '../base_datos/conexion.php';
Conexion::connectar();
include_once "../base_datos/usuarios.php";

if (isset($_POST['Guardar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $menudeo = $_POST['menudeo'];
    $mayoreo = $_POST['mayoreo'];

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }
    else{
        $imgContent="ok";
    }

    $obj = new usuarios();
    $sentencia = "'$id','$nombre','$descripcion','$cantidad' ,'$menudeo','$mayoreo','$imgContent'";

    $obj->insertar('productos', $sentencia);

    
}
?>
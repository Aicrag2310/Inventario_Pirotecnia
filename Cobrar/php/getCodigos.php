
<?php
include_once '../base_datos/conexion.php';
Conexion::connectar();






$html = "";
$campo = $_POST["campo"];
$sql = "SELECT * FROM productos Where Id  LIKE LOWER ('%" . $_POST["campo"] . "%') LIMIT 0,10";
$result =  mysqli_query(self::$conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while ($row = mysqli_fetch_assoc($result)) {
        $html .= "<li onclick=\"mostrar('$row[Id]','$row[Nombre_producto]','$row[Descripcion]','$row[cantidad]')\">" . $row["cantidad"] . " - " . $row["Id"] . " - " . $row["Nombre_producto"] . " - " . $row["Descripcion"] . "</li>";
    }

    
}



echo json_encode($html, JSON_UNESCAPED_UNICODE);

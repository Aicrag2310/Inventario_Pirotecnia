<?php
require '../Menu/menu_cabecera.php';

if (isset($_SESSION['usuario'])) {

?>
<h1>Agregar producto nuevo</h1>

<?php

#session_destroy();
} else {
    header("Location: ../Login/index.php");
    
}
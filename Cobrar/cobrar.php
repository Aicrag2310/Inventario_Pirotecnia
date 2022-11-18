<?php
require '../Menu/menu_cabecera.php';
if (isset($_SESSION['usuario'])) {
?>
    <div>
        <div>
            <h2>Ventas</h2>
            <label for="campo">Ingresar código:</label>
            <input type="text" name="campo" id="campo" placeholder="Ingrese código de producto">
            <ul id="lista"></ul>
        </div>

        <div>
            <label for="nombre">Paciente</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" disabled>
            <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido paterno" disabled>
            <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido materno" disabled>
        </div>
    </div>
    <script src="js/peticiones.js"></script>
<?php

} else {
    echo "No conexión";
}

?>
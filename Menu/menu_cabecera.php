<?php

session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if (!isset($_SESSION['usuario'])) {
    
    header('Location: ../Login/index.php');

    exit();
}else{
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href='../Menu/css/estilo_menu.css'>
</head>

<body>
    <div id="sidemenu" class="menu-collapsed">
        <!-- HEADER (CABEZERA) -->
        <div id="header">
            <div id="title"><span>Sistema de ventas</span></div>
            <!-- MENU -->
            <div id="menu-btn">
                <div class="btn-hamburguer"></div>
                <div class="btn-hamburguer"></div>
                <div class="btn-hamburguer"></div>
            </div>
        </div>
        <!-- PERFIL -->
        <div id="profile">
            <a href="">
            <div id="photo"></div>
            </a>
        </div>
        <!--ITEMS -->
        <div id="menu-items">
            <div class="item">
                <a href="../Cobrar/cobrar.php">
                    <div class="icon"> </div>
                    <div class="title"><span>Cobrar</span></div>
                </a>

            </div>
            <div class="item">
                <a href="../Productos/diseño_producto.php">
                    <div class="icon"> </div>
                    <div class="title"><span>Agregar producto</span></div>
                </a>

            </div>
            <div class="item">
            <a href=>
                <div class="icon"> </div>
                    <div class="title"><span>Inventario</span></div>
                </a>

            </div>
        
            <div class="item separator">
            </div>
            <div class="item">
                <a href="">
                    <div class="icon"> </div>
                    <div class="title"><span>Corte de caja</span></div>
                </a>

            </div>
            <div class="item">
                <a href="../Menu/php/cerrar_sesion.php">
                    <div class="icon"> </div>
                    <div class="title"><span>Cerrar Sesión</span></div>
                </a>
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        })
    </script>
</body>
<?php
}

//Solo ocuparemos un boton para cerrar session

?>


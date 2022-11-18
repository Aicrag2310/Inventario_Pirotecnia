<link rel="stylesheet" href="../Productos/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--  Datatables  -->
<link rel="stylesheet" type="text/css" href="../Productos/css/datatables.min.css" />
<!--  extension responsive  -->
<link rel="stylesheet" type="text/css" href="../Productos/css/responsive.dataTables.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require '../Menu/menu_cabecera.php';
if (isset($_SESSION['usuario'])) {
    include_once '../base_datos/conexion.php';
    $conn=Conexion::connectar();
    $sql = "Select * from productos";
    $result = mysqli_query($conn, $sql);

?>
    <style>
        table thead {
            background-color: #38b5ef;
        }
    </style>
    <?php
    include 'php/logica_guardar_producto.php';
    ?>

    <body>
        <div>
            <form action="" method="POST" enctype="multipart/form-data" class="row m-3">
                <div class="col-md-2">
                    <label for="validationDefault03" class="form-label">Id de producto</label>
                    <input type="text" class="form-control" id="validationDefault03" name="id" placeholder="Ingrese id" required>
                </div>
                <div class="col-md-5">
                    <label for="validationDefault01" class="form-label">Nombre de producto</label>
                    <input type="text" class="form-control" id="validationDefault01" name="nombre" placeholder="Ingrese nombre de producto" required>
                </div>
                <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="validationDefault02" name="descripcion" placeholder="Ingrese descripción de producto" required>
                </div>



                <div class="col-md-2">
                    <label for="validationDefault04" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="validationDefaultUsername" name="cantidad" placeholder="Ingrese cantidad" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="col-md-5">
                    <label for="validationDefaultUsername" class="form-label">Precio menudeo</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">$</span>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="menudeo" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationDefaultUsername" class="form-label">Precio mayoreo</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">$</span>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="mayoreo" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationDefaultUsername" class="form-label">Imagen de producto (Opcional)</label>
                    <input type="file" id="alex">
                </div>
        </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="Guardar">Registrar producto</button>
        </div>
        </form>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre producto</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio menudeo</th>
                                <th>Precio mayoreo</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_assoc($result)) {
                               
                            ?>
                            <tr>
                                <td><?php   echo $row["Id"] ?></td>
                                <td><?php   echo $row["Nombre_producto"] ?></td>
                                <td><?php   echo $row["Descripcion"] ?></td>
                                <td><?php   echo $row["cantidad"] ?></td>
                                <td><?php   echo $row["precio_menudeo"] ?></td>
                                <td><?php   echo $row["precio_mayore"] ?></td>
                                <td><a href="php/actualizar.php?id=<?php echo $row["Id"] ?>"><button class="btn btn-primary" type="submit" name="Guardar">Actualizar</button></a></td>
                                <td><a href="php/eliminar.php?id=<?php echo $row["Id"] ?>"><button class="btn btn-danger" type="submit" name="Guardar">Eliminar</button></a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <script src="../Productos/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="../Productos/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="../Productos/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--   Datatables-->
        <script type="text/javascript" src="../Productos/js/datatables.min.js"></script>

        <!-- extension responsive -->
        <script src="../Productos/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

<?php
    #session_destroy();
} else {
    header("Location: ../Login/index.php");
}
//Solo ocuparemos un boton para cerrar session

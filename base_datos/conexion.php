<?php
class Conexion{
    public static $conn;
    public static function connectar(){
        $servername = "localhost";
        $database = "punto_venta";  
        $username = "root";
        $password = "";
        // Crear conexion
        self :: $conn = mysqli_connect($servername, $username, $password, $database);
        // Checar conexion 
        if (!self :: $conn) {
            die("Conexion Fallida " . mysqli_connect_error());
        }
        else{
            //echo"Conexión correcta";
        }
    
         return self :: $conn;   
    }

    public static function cerrar_conexion(){
        mysqli_close(self :: $conn);    
        echo "<br> Conexion cerrada";
    }
}


?>
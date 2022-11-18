<?php 
class usuarios{
	public static $conn;
	public function loginuser($condicion){
		self :: $conn = Conexion :: connectar();
        $sql="SELECT * FROM `usuarios` WHERE $condicion;";
        $resultado=mysqli_query(self :: $conn,$sql);

		if(mysqli_num_rows($resultado) > 0){
						

			return 1;
			Conexion :: cerrar_conexion(); 
		}else{
			return 0;
		}
		
		
	}
    public function select($tabla,$condicion){
		self :: $conn = Conexion :: connectar();
        $sql="SELECT * FROM `$tabla` WHERE $condicion";
        $resultado=mysqli_query(self :: $conn,$sql);

		if(mysqli_num_rows($resultado) > 0){
            //echo "Correcto";
		}else{
			?> 
			
			<?php
		}
		
	}

	public function insertar($tabla,$condicion){
		
		self :: $conn = Conexion :: connectar();
		
		$sql="INSERT INTO $tabla VALUES ($condicion)";
		mysqli_query(self :: $conn , $sql);
		
		
	}


	
}



?>
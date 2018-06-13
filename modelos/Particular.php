<?php 	

//INCLUIMOS LA CONEXION A LA BASE DE DATOS
require "../config/Conexion.php";


Class Particular
{
	//Implementamos nuestro constructor
	public function _construct()
	{


	}
        
	//implementamos un metodos para insertar registo
	public function insertar($codigoParticular, $rutParticular, $passwordParticular,$nombreParticular,$direccionParticular, $emailParticular)
	{
		$sql="INSERT INTO Particular(codigoParticular, rutParticular, passwordParticular, nombreParticular,direccionParticular,emailParticular)
		Values('$codigoParticular','$rutParticular','$passwordParticular','$nombreParticular','$direccionParticular', '$emailParticular')";
		return ejecutarConsulta($sql);
	}
        
        public function insertarTelefono($idTelefono,$numeroTelefono,$codigoParticular)
	{
		$sql="INSERT INTO Telefono(idTelefono,numeroTelefono,Particular_codigoParticular)
		Values('$idTelefono','$numeroTelefono','$codigoParticular')";
		return ejecutarConsulta($sql);
	}

}

 ?>


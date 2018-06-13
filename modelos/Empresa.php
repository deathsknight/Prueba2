<?php 	

//INCLUIMOS LA CONEXION A LA BASE DE DATOS
require "../config/Conexion.php";


Class Empresa
{
	//Implementamos nuestro constructor
	public function _construct()
	{


	}
        
	//implementamos un metodos para insertar registo
	public function insertar($codigoEmpresa, $rutEmpresa, $nombreEmpresa,$passwordEmpresa,$direccionEmpresa)
	{
		$sql="INSERT INTO Empresa(codigoEmpresa,rutEmpresa,nombreEmpresa,passwordEmpresa,direccionEmpresa)
		Values('$codigoEmpresa','$rutEmpresa','$nombreEmpresa','$passwordEmpresa','$direccionEmpresa')";
		return ejecutarConsulta($sql);
	}
        
        public function insertarContacto($rutContacto,$nombreContacto,$emailContacto,$telefonoContacto, $codigoEmpresa)
	{
		$sql="INSERT INTO Contacto(rutContacto,nombreContacto,emailContacto,telefonoContacto,Empresa_codigoEmpresa)
		Values('$rutContacto','$nombreContacto','$emailContacto','$telefonoContacto','$codigoEmpresa')";
		return ejecutarConsulta($sql);
	}

}

 ?>
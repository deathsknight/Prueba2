<?php 	

require_once "../modelos/Empresa.php";

$empresa = new Empresa();

//ESTRUCTURA CONDICIONADA DE UNA SOLA LINEA

$codigoEmpresa = isset($_POST["codigoEmpresa"])? limpiarCadena($_POST["codigoEmpresa"]): "";
$rutEmpresa = isset($_POST["rutEmpresa"])? limpiarCadena($_POST["rutEmpresa"]): "";
$nombreEmpresa = isset($_POST["nombreEmpresa"])? limpiarCadena($_POST["nombreEmpresa"]): "";
$passwordEmpresa = isset($_POST["passwordEmpresa"])? limpiarCadena($_POST["passwordEmpresa"]): "";
$direccionEmpresa = isset($_POST["direccionEmpresa"])? limpiarCadena($_POST["direccionEmpresa"]): "";

$rutContacto = isset($_POST["rutContacto"])? limpiarCadena($_POST["rutContacto"]): "";
$nombreContacto = isset($_POST["nombreContacto"])? limpiarCadena($_POST["nombreContacto"]): "";
$emailContacto = isset($_POST["emailContacto"])? limpiarCadena($_POST["emailContacto"]): "";
$telefonoContacto = isset($_POST["telefonoContacto"])? limpiarCadena($_POST["telefonoContacto"]): "";


$resp = $empresa-> insertar($codigoEmpresa, $rutEmpresa, $nombreEmpresa,$passwordEmpresa,$direccionEmpresa);
$resp1 = $empresa-> insertarContacto($rutContacto,$nombreContacto,$emailContacto,$telefonoContacto, $codigoEmpresa);
//echo "Empresa Agregada";

if($resp && $resp1){
    ?>
        <script>
            alert('El Registro ha sido Existoso'); 
            window.location.href='../index.php';
        </script>
    <?php
    
}
else{
    ?>
        <script>
            alert('El Registro ha Fallado'); 
            window.location.href='../index.php';
        </script>
    <?php
}	

?>
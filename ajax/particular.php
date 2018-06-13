<?php 	

require_once "../modelos/Particular.php";

$particular = new Particular();

//ESTRUCTURA CONDICIONADA DE UNA SOLA LINEA

$codigoParticular = isset($_POST["codigoParticular"])? limpiarCadena($_POST["codigoParticular"]): "";
$rutParticular = isset($_POST["rutParticular"])? limpiarCadena($_POST["rutParticular"]): "";
$passwordParticular = isset($_POST["passwordParticular"])? limpiarCadena($_POST["passwordParticular"]): "";
$nombreParticular = isset($_POST["nombreParticular"])? limpiarCadena($_POST["nombreParticular"]): "";
$direccionParticular = isset($_POST["direccionParticular"])? limpiarCadena($_POST["direccionParticular"]): "";
$emailParticular = isset($_POST["emailParticular"])? limpiarCadena($_POST["emailParticular"]): "";

$idTelefono = isset($_POST["idTelefono"])? limpiarCadena($_POST["idTelefono"]): "";
$numeroTelefono = isset($_POST["numeroTelefono"])? limpiarCadena($_POST["numeroTelefono"]): "";

$resp = $particular-> insertar($codigoParticular, $rutParticular, $passwordParticular,$nombreParticular,$direccionParticular, $emailParticular);
$resp1 = $particular-> insertarTelefono($idTelefono,$numeroTelefono,$codigoParticular);
//echo "Particular Agregada";

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



<!DOCTYPE html>
<html>
    <head>
        <title>Formulario Particular</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../style/estilo.css">
        <script src="JQuery.js" type="text/javascript"></script>
    </head>
    <body>
        <center>
        <div class="a">Hospital Pelotillehue</div>
        <br>
        <!-- seccion botones menu-->
        <center>
            <div class="container">
                <a href="../index.php" class="btn btn-danger">Inicio</a>
                <!--<button type="button" class="btn btn-info">Acerca de...</button>-->
                <a href="../Registrarse.php" class="btn btn-danger">Registrar</a>
                <!--<button type="button" class="btn btn-info">Fotos</button>-->
            </div>
        </center>
        <br>
    <center><h1>Ingrese sus Datos</h1></center><br>
    <div class="container">
        
        <form class="form-horizontal" action="../ajax/particular.php" method="POST">

                <div class="form-group">
                    <label class="control-label col-sm-4" for="codigoParticular">Codigo Particular:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="codigoParticular" placeholder="0000" name="codigoParticular" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="rutParticular">Rut Particular:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="rutParticular" placeholder="12.345.678-9" name="rutParticular" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="passwordParticular">Password Particular:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="passwordParticular" placeholder="********" name="passwordParticular"required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="nombreParticular">Nombre Particular:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombreParticular" placeholder="Empresa S.A" name="nombreParticular" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="direccionParticular">Dirección Particular:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="direccionParticular" placeholder="Av. test #346" name="direccionParticular" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="emailParticular">Email Particular:</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="emailParticular" placeholder="test@gmail.com" name="emailParticular" required>
                    </div>
                </div>
            
                <center><h1>Telefono</h1></center><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="idTelefono">Id Telefono:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="idTelefono" value="+569" readonly="true" name="idTelefono" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="numeroTelefono">Telefono:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="numeroTelefono" placeholder="912345678" name="numeroTelefono">
                    </div>
                </div>
                
                
                <center>
                    <div class="form-group">        
                        
                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="btn btn-default"></i>Guardar</button>
   
                    </div>
                </center>
            </form>
    </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
        require '../footer.php';
    ?>
</html>



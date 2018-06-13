<!DOCTYPE html>
<html>
    <head>
        <title>Formulario Empresa</title>
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
        
        <form class="form-horizontal" action="../ajax/empresa.php" method="POST">

                <div class="form-group">
                    <label class="control-label col-sm-4" for="codigoEmpresa">Codigo Empresa:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="codigoEmpresa" placeholder="0000" name="codigoEmpresa" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="rutEmpresa">Rut Empresa:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="rutEmpresa" placeholder="12.345.678-9" name="rutEmpresa" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="nombreEmpresa">Nombre Empresa:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombreEmpresa" placeholder="Empresa S.A" name="nombreEmpresa" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="passwordEmpresa">Password Empresa:</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="passwordEmpresa" placeholder="********" name="passwordEmpresa"required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="direccionEmpresa">Dirección Empresa:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="direccionEmpresa" placeholder="Av. test #346" name="direccionEmpresa" required>
                    </div>
                </div>
            
            <center><h1>Contacto</h1></center><br>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="rutContacto">Rut Contacto:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="rutContacto" placeholder="12.345.678-9" name="rutContacto" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="nombreContacto">Nombre Contacto:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombreContacto" placeholder="Juan Perez" name="nombreContacto" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="emailContacto">Email Contacto:</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="emailContacto" placeholder="test@gmail.com" name="emailContacto" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="telefonoContacto">Telefono Contacto:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="telefonoContacto" placeholder="912345678" name="telefonoContacto">
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



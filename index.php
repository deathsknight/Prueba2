<!DOCTYPE html>

<?php
require 'header.php';
?>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <center>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="imgHospital/laboratorio1.jpg" alt="Laboratory" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="imgHospital/laboratorio2.jpg" alt="Laboratory" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="imgHospital/laboratorio3.jpg" alt="Laboratory" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="imgHospital/laboratorio4.jpg" alt="Laboratory" style="width:60%;">
                        </div>

                    </div>
                    
                </center>
            </div>
        </div>

        <br><br><br>

        <div class="container">
            <div class="row">
                <h2>Últimas obras destacadas</h2>
                <div class="col-sm-4">
                    <img src="obras/torreEntel.jpg" alt="Galvarino" style="width:80%;">
                    <br>
                    <a href="https://www.grupotasco.cl/copia-de-obras-en-ejecucion?lightbox=dataItem-j71z13t51">Constructora:TASCO BOETSCH</a>
                </div>
                <div class="col-sm-4">
                    <img src="obras/mallFloridaCenter.jpg" alt="Galvarino" style="width:80%;">
                    <br>
                    <a href="http://www.cosud.com/mall-florida-center">Constructora Sudamericana</a>
                </div>
                <div class="col-sm-4">
                    <img src="obras/mallLosDomin.jpg" alt="Galvarino" style="width:80%;">
                    <br>
                    <a href="http://www.arenasconstructora.cl/portal/?portfolio=mall-plaza-los-dominicos">Arenas Construcciones</a>
                </div>
            </div>
            <br><br><br>
            <?php
            require 'footer.php';
            ?>
        </div>
    </center>
</body>
</html>

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
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <center>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="obras/acuinova_1.jpg" alt="Acuinova" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="obras/apurranque_1.jpg" alt="Apurranque" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="obras/benito_1.jpg" alt="Benito" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="obras/caf_1.jpg" alt="Caf" style="width:60%;">
                        </div>

                        <div class="item">
                            <img src="obras/ebco_1.jpg" alt="Ebco" style="width:60%;">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    -->
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

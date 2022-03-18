<!doctype html>
<?php include("function/functions.php");
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>Librería Calíope</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

    <!-- Navbar will come here  -->

    <nav class="navbar navbar-fixed-top" role="navigation" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
                <a class="navbar-brand" href="#">Librería Calíope</a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <?php 
                    
                    
                   
                    if(!isset($_SESSION['email'])){
                        echo "<li><a href='login1.php'>Inicio de sesión</a></li>";
                    }
                    else 
                    {
                        echo "<li><a href='logout.php'>Registrarse</a></li>";
                    }
                     if(isset($_SESSION['email'])){
                        $sess=$_SESSION['email'];
                        echo "<li><a>Hi ".$_SESSION['email']." !</a></li>";
                        
                    }
                    else {
                        echo "<li><a>Hola Lector</a></li>";
                    }
                    ?>

                    <li><a href="cart.php">Carrito<span class="badge"><?php total_items(); ?></span></a></li>

                </ul>
                <form action="results.php" method="get" class="navbar-form navbar-right">
                    <div class="form-group label-floating">
                        <label class="control-label">Buscar Libro</label>
                        <input type="text" name="user_query" class="form-control">
                    </div>
                    <button type="submit" name="search" class="btn btn-round btn-just-icon btn-primary"><i class="material-icons">buscar</i><div class="ripple-container"></div></button>
                </form>


            </div>

        </div>
    </nav>



    <!-- end navbar -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-4" id="bk1">
                                <img src="./assets/images/cruel.jpg">
                                <div class="c-content "><b>El príncipe cruel</b><br> Holly Black <br><br>
                                    <p>Jude tenía siete años cuando sus padres fueron asesinados y, junto con sus dos hermanas, fue trasladada a la Corte Suprema del Reino Fae. Ahora un nuevo peligro amenaza al trono y todo cambiará</p>
                                   

                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-4" id="bk2">
                                <img src="./assets/images/atlas.jpg">
                                <div class="c-content "><b>EL atlas de los seis</b><br> Olivia Blake<br><br> Los sesi mejores magos de todo el mundo, competirán por un lugar en la sociedad secreta de la Biblioteca de Alejandría, solo uno ganará.
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-4" id="bk3">
                                <img src="assets/images/circe.jpg">
                                <div class="c-content "><b>Circe</b><br> Madeline Miller <br><br>En el palacio de Helios, dios del sol y el más poderoso de los titanes, nace una niña, que se convertirá en una de las más grandes hechiceras de la historia
                                </div>

                            </div>
                        </div>
                        


                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>
    <!--carousel end-->



    <table border=0>
	<TR><TD><img width="200px" height="300px" src="assets/images/1.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/2.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/3.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/4.jpg"></TD>
	
	</TR>
    <TR><TD><img width="200px" height="300px" src="assets/images/circe.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/cruel.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/atlas.jpg"></TD>
		<TD><img width="200px" height="300px" src="assets/images/circe.jpg"></TD>
	
	</TR>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>
<script src="assets/js/carousel.js" type="text/javascript"></script>
<script src="assets/js/myscripts.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Silver Nourishment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
	<!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
	<!-- <link rel="stylesheet" href="css/fontawesome.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/silverNourishment.js" type="text/javascript"></script>
	<script src="js/agendarCita.js" type="text/javascript"></script>
	<!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->

</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<!-- <div id ="LKTOP"> -->
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa-baby"></i>Nutrición y vida</p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<i class="fa fa-user"></i>
								SILVER NOURISHMENT
							</a>
						</li>
					</ul>
				</div>
			<!-- </div>  -->
		</div>	

	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="images/SilverNourishment.png" alt="logo" height="300px">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li><a href="/">INICIO</a></li>
					<li><a href="/ComposicionAlimentos">Composición de los alimentos</a></li>
					<li><a href="/ProcesodeNutricion">Proceso de nutrición</a></li>
					<li><a href="/Dietas">Dietas</a></li>
					<li class="active"><a href="/Tests">Tests</a></li>

		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->

	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="products-heading">
							<h2>Obten tu indice de masa corporal</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-18 col-md-12">
							    <div class="">
							    	<a href="#">
										<img src="images/imc.png" height="400px" width="600px">
									</a>
							      		
									  <!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
                            <br>


                            <div class="input-group">
                                <form>
                                  <div class="form-group">
                                    <label>ALTURA:</label>
                                    <input id="altura" type="text" style="border-color: green;width: 50px;">
                                    <span>metros</span>
                                  </div>
                                  <div class="form-group">
                                    <label>PESO:</label>
                                    <input id="peso" type="text" style="border-color: green;width: 50px;">
                                    <span>Kg</span>
                                  </div>
                                </form>
                      
                                <button type="button" class="btn btn-success"  onclick="calcularIMC()"> Calcular IMC </button>
                      <br>
                                <div >
                                  <label>Su IMC:</label>
                                  <div id="resultadoIMC"></div>
                                </div>
                              </div>

								<br>
								<br>

							<div class="input-group" id="agendarCita" style="visibility: hidden;background-color: lightgreen;">
								<label id="lblmensajeIMC"></label>
								<label>, por tu salud es importante agendar una cita para una valoración </label>
								
								<br>
								<label>Ingresa tu nombre</label>
								<br>
								<input type="text" id="txtNombre">
								<br>


							 	<label for="calendario">Selecciona tu proxima cita:</label>
								 <br>
								<input type="date" id="calendario" name="calendario"  min="2022-02-03" >
								<br>
								<label id="lblNombreCita"></label>
								<br>
                                <button type="button" class="btn btn-primary"  onclick="agendarCita()"> Agendar cita </button>

							</div>

						
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

	

	

		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
	
	

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/SilverNourishment.png" alt="">
						</a>
						<p>
							Silver Nourishment es una página dedicada a ayudar a la gente a tener buenos habitos de alimentación.
						</p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>Medios de contacto</h4>
						<p> <i class="fa  fa-mobile"></i> <span>Celular:</span> 55 1946 4631</p>
						<p class="mail"><i class="fa  fa-envelope"></i>Email: <span>Lisset_1320114016@uptecamac.edu.mx</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright-text pull-right">SilverNourishment @2022 Designed by <a href="#">Lisset Guadalupe Sanchez Plata</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;
		
		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
			  panel.style.display = "none";
			} else {
			  panel.style.display = "block";
			}
		  });
		}
		</script>
</body>
</html>
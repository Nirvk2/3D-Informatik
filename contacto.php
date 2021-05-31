<?php
require_once "./config/config.php";
$inicio="";
$informatica="";
$impresiones="";
$moviles="";
$galeria="";
$nosotros="";
$contacto="active";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>3D Informatic - Contacto</title>
    <?php
         require_once "./modulos/metas.php";
        ?>
	
</head>

<body class="contact-page">
	<div class="wrap-body">
		<header class="">
            <?php 
            require_once "./modulos/header.php";
            ?>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
			<section class="content-box box-style-1 box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Contactenos</h2>
							</div>
						</div>
					</div>
				</section>
				<!-----------------Content-Box-------------------->
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						
						<div class="embed-container maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.685726993443!2d-3.7154362850737797!3d40.43795737936263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422844ab7fab37%3A0xe739c13a8fa1522b!2sCalle%20de%20Guzm%C3%A1n%20el%20Bueno%2C%2089%2C%2028015%20Madrid%2C%20Espa%C3%B1a!5e0!3m2!1ses!2spe!4v1622060376605!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="row contato">
							<div class="col-1-2 f-right">
								
								<div id="contact_form">
									<h4>Contactenos</h4>
									<form name="form1" id="ff" method="post" action="contact.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Nombre" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Email" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Asunto" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Asunto" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Mensaje"></textarea>
											</div>
										</label>
										<button type="submit" name="submitcontact">Enviar</button>
									</form>
								</div>
							</div>
							<div class="col-1-2">
								<div class="horario">
									<h4>Detalles de contacto</h4>
									<p><i class="fa fa-map-marker"></i><span> Calle Guzmán el Bueno 89, local 1, 28015 Madrid</span></p>
									<br>
									<p><i class="fa fa-clock-o"> </i><span> Horario de atención</span></p>
									<p class="manana">Lunes a Viernes: 10:00 - 14:00</p>
									<p class="tarde">16:30 - 20:30</p>
									<p class="manana">Sabados: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 10:00 - 15:00</p>
									<p class="manana">Domingo: Cerrado</p>
									<br>
									<a href=""><i class="fa fa-phone"></i> 652 82 65 87</a>
									<br>
								</div>
							</div>
							
						</div>
						
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php
        require_once "./modulos/footer.php";
        ?>
	</div>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>
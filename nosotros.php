<?php
require_once "./config/config.php";
$inicio="";
$informatica="";
$impresiones="";
$moviles="";
$galeria="";
$nosotros="active";
$contacto="";
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
  <title>3D Informatic - Nosotros</title>

        <?php
         require_once "./modulos/metas.php";
        ?>  	
</head>

<body class="home-page">
	<div class="wrap-body">
        <header class="head">
			<?php 
            require_once "./modulos/header.php";
            ?>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/slide3.jpg" />
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>Impresi&oacute;n 3D</h1>
							<p>Tecnologia y calidad</p>
							<a class="button" href="single.html">Leer M</a>
						</div>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/slide1.jpg" />
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>DIGITALIZACION 3D</h1>
							<p>A medida</p>
							<a class="button" href="single.html">LEER</a>
						</div>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/slide2.jpg" />
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>DISEÑO 3D</h1>
							<p>Sofisticacdo</p>
							<a class="button" href="single.html">Read More</a>
						</div>
					</div><!-- /header-text -->
					
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
      			<section class="content-box fond-box box-style-1 box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header2">
								<h2>Nosotros</h2>
								<hr>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-1-------------------->
				<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="post-thumbnail-wrap">
										<img src="./img/banner/impresoras-persona.jpeg">
									</div>
									<div class="entry-content">
										<div class="excerpt">
											<p> <img style="width:90px;float:left;" src="./img/logo_green.png" /> es una empresa de tecnolog&iacute;a l&iacute;der en el mercado, con experiencia desde el año 2005. Somos una empresa espezializada en la reparaci&oacute;n de smarphones, tabletas, port&aacute; e impresiones 3D, con una amplica variedad de productos. Damos servicios a clientes de toda España. </p></div>
											<p>Somos tu centro de Soluciones Informáticas e impresión 3D, Desde nuestro laboratorio en Madrid. Nuestro personal calificado con más de 15 años de experiencia en el sector, laboratorio en constante actualización y calidad de proveedores, se combinan para ofrecer soluciones. Estamos ubicados en Calle de Guzman El Bueno, 89. Local 1. 28015 Madrid.</p>
											
											
											
											<h2>Nuestro equipo</h2>
											
											<p>Est&aacute; formado por un equipo de t&eacute;cnicos y comerciales que se han formado en otras importantes empresas del sector. La experiencia de trabajo en estas empresas nos ha servido para mejorar seg&uacute;n las necesidades reales de los t&eacute;cnicos y particulares.</p>
											
											
										<div class="note">
										  
										  <div class="clear"></div>
										</div>
									</div>
								</div>
							</article>
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
        
		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		
	</div>
</body>
</html>
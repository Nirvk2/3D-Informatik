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
							<h1>INPRESION 3D</h1>
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
										<div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
										<h2>Visión</h2>
										<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
										<h2>Misión</h2>
										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
										<h2>Objetivos</h2>
										<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
										<div class="note">
										  <ol>
											<li>Lorem ipsum</li>
											<li>Sit amet vultatup nonumy</li>
											<li>Duista sed diam</li>
										  </ol>
										  <div class="clear"></div>
										</div>
										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
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
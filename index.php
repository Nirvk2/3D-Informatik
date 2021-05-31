<?php
require_once "./config/config.php";
$inicio="active";
$informatica="";
$impresiones="";
$moviles="";
$galeria="";
$nosotros="";
$contacto="";

?>

<!DOCTYPE html>
<html lang="es"> 
<head>
  <title>3D Informatic - Inicio</title>


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
                <img class="item-img" src="./img/banner/impresora3dban.jpg"/>
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>Diseño e Impresi&oacute;n 3d</h1>
							<p>Tecnolog&iacute;a y calidad</p>
							<a class="button" href="impresiones.php">EXPLORAR</a>
						</div>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img class="item-img" src="./img/banner/informatica.jpg" />
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>Configuramos tu ordenador</h1>
							<p>Seg&uacute;n vuestras necesidades</p>
							<a class="button" href="informatica.php">EXPLORAR</a>
						</div>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img class="item-img" src="./img/banner/repair-movil.jpg" />
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12 text-left">
							<h1>Reparaciones expr&eacute;s</h1>
							<p>Reparamos tu m&oacute;vil hoy mismo, sin cita previa</p>
							<a class="button" href="movil.php">EXPLORAR</a>
						</div>
					</div><!-- /header-text -->
					
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box box-style-1 box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Nuestros Servicios</h2>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="container box-style-1 box-2">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                
								
                                <div class="col-1-4">
                                        <div class="serv ser_width1">
                                            <h2>Diseño 3D</h2>
                                            <hr/>
                                            <p>
                                            Producimos tus piezas para Impresi&oacute;n 3D.
                                            </p>
                                            <img src="./img/icon/diseno-3d.png" alt="">
                                            <a class="button" href="impresiones.php">Leer mas</a>
                                        </div>
                                </div>
                                
                                <div class="col-1-4">
                                        <div class="serv ser_width1">
                                            <h2>Impresi&oacute;n 3D</h2>
                                            <hr/>
                                            <p>
                                            Imprimimos tus proyectos en 3D.
                                            </p>
                                            <img src="./img/icon/impresora-3d.png" alt="">
                                            <a class="button" href="impresiones.php">Leer mas</a>
                                        </div>
                                </div>
                                <div class="col-1-4">
                                        <div class="serv ser_width1">
                                            <h2>Inform&aacute;tica</h2>
                                            <hr/>
                                            <p>
                                            Reparaci&oacute;n y actualizaci&oacute;n de ordenadores.
                                            </p>
                                            <img src="./img/icon/ayuda.png" alt="">
                                            <a class="button" href="informatica.php">Leer mas</a>
                                        </div>
                                </div>
                                <div class="col-1-4">
                                        <div class="serv ser_width1">
                                            <h2>M&oacute;viles</h2>
                                            <hr/>
                                            <p>
                                               Resparaci&oacute;n de dispositivos m&oacute;viles. 
                                            </p>
                                            <img src="./img/icon/telefono.png" alt="">
                                            
                                            <a class="button" href="movil.php">Leer mas</a>
                                        </div>
                                    
                                </div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box box-style-2 box-1" style="margin-bottom: 30px;">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Proceso Impresi&oacute;n 3D Online</h2>
							</div>
							
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="container box-style-2 box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="row">
                                <div class="col-1-2">
                                    <div class="row procesos">
                                            <div class="col-1-2">
                                                <img src="./img/procesos/subir-3d.png" alt="" >
                                            </div>
                                            <div class="col-1-2">
                                                <div class="entry-content t-center">
                                                    <h3>Paso 1</h3>
                                                    <p>Env&iacute;a tu modelo 3D en formato STL, OBJ, STP. </p>
                                                    
                                                </div>
                                            </div>
                                    </div>  
                                </div>
                                <div class="col-1-2">
                                    <div class="row procesos">
                                            <div class="col-1-2 f-right">
                                            <img src="./img/procesos/parametros-3d.png" alt="" >
                                            </div>
                                            <div class="col-1-2">
                                                <div class="entry-content t-center">
                                                    <h3>Paso 2</h3>
                                                    <p>No ten&eacute;is el archivo entonces creamos tu Modelo 3D.</p>
                                                    
                                                </div>
                                            </div>
                                    </div>  
                                </div>  
							</div>
							<div class="row">
                                <div class="col-1-2">
                                    <div class="row procesos">
                                            <div class="col-1-2">
                                                <img src="./img/icon/impresora-3d.png" alt="" >
                                            </div>
                                            <div class="col-1-2">
                                                <div class="entry-content t-center">
                                                    <h3>Paso 3</h3>
                                                    <p>Imprimimos tu modelo 3D con las especificaciones.</p>
                                                   
                                                </div>
                                            </div>
                                        
                                    </div>  
                                </div>
                                <div class="col-1-2">
                                    <div class="row procesos">
                                            <div class="col-1-2 f-right">
                                            <img src="./img/procesos/mapa.png" alt="" >
                                            </div>
                                            <div class="col-1-2">
                                                <div class="entry-content t-center">
                                                    <h3>Paso 4</h3>
                                                    <p>Te lo env&iacute;amos a cualquier parte de España.</p>
                                                    
                                                </div>
                                            </div>
                                    </div>  
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
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 9000,
			items : 1,
            video:true,
            lazyLoad:true,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});

        // $('.owl-carousel').owlCarousel({
        //     autoPlay: 3000,
        //     loop:true,
        //     margin:10,
        //     nav:true,
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:3
        //         },
        //         1000:{
        //             items:5
        //         }
        //     }
        // })
		</script>
	</div>
</body>
</html>
<?php
require_once "./config/config.php";
$inicio="";
$informatica="active";
$impresiones="";
$moviles="";
$productos="";
$galeria="";
$nosotros="";
$contacto="";
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
  <title>3D Informatic - Servicios inform&aacute;ticos</title>

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
			<div class="wrap-container"><!-----------------content-box-1-------------------->
                <section class="intro">
                    <div class="left">
                        <div>
                        
                        <h1>Nuestro Servicio inform&aacute;tico</h1>
                        <p>3D-InformatiK es tu centro de reparaciones especializadas para tu Ordenador. Nuestros t&eacute;cnicos son especializados, cualificados para reparar, asesorar y diagnosticar cualquier falla en los componentes de su equipo.</p>
                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20informaci&oacute;n%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                        </div>
                    </div>

                    <div class="slider">
                        <ul>
                        <li style="background-image:url(./img/servicios/configuracion.png)">
                            <div class="center-y">
                            <h3>Configuraci&oacute;n de Ordenadores</h3>
                            <a href="#configuracion">ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/mantenimiento.png)">
                            <div class="center-y">
                            <h3>Mantenimiento de ordenadores</h3>
                            <a href="#mantenimiento">Ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/asesoria.png)">
                            <div class="center-y">
                            <h3>Asesoria</h3>
                            <a href="#asesoria">Ver mas</a>	
                            </div>
                        </li>
                        </ul>

                        <ul>
                        <nav>
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
                        </nav>
                        </ul>
                    </div>
                </section>
                <section class="content-box box-style-1 box-1" style="margin-bottom: 30px;">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Servicios</h2>
							</div>
							
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box box-style-1 box-2">
					<div class="zerogrid" style="width: 100%">
						<div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                
								<div class="card1 col-1-1" id="configuracion">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2">
                                            <img class="img-detallIn" src="./img/servicios/pc 3d.jpg" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Tu ordenador a medida</h2>
                                                <hr/>
                                                <p>
                                                
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Configuramos su ordenador Seg&uacute;n vuestras necesidades.</h5>
                                                    <p>
                                                    <i class="fa fa-angle-double-right"></i> Gaming <br>
                                                    <i class="fa fa-angle-double-right"></i> Diseño Grafico<br>
                                                    <i class="fa fa-angle-double-right"></i> Ingenier&iacute;a<br>
                                                    <i class="fa fa-angle-double-right"></i> Arquitectura<br>
                                                    <i class="fa fa-angle-double-right"></i> Oficina<br>
                                                    <i class="fa fa-angle-double-right"></i> Teletrabajo<br>
                                                    </p>
                                                </div>
                                                
                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20informaci&oacute;n%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="card col-1-1" id="mantenimiento">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2 f-right">
                                            <img class="img-detallIn" src="./img/servicios/mac 3d.jpg" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Mantenimiento de ordenadores</h2>
                                                <hr/>
                                                <p>
                                                
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Servicios</h5>
                                                    <p>
                                                    <i class="fa fa-angle-double-right"></i> Consultor&iacute;a Tecnol&oacute;gica.<br>
                                                    <i class="fa fa-angle-double-right"></i> Ordenadores a Medida.<br>
                                                    <i class="fa fa-angle-double-right"></i> Servicio T&eacute;cnico Multi Marca.<br>
                                                    <i class="fa fa-angle-double-right"></i> Instalaci&oacute;n de Redes de datos.<br>
                                                    <i class="fa fa-angle-double-right"></i> Limpieza y Mantenimiento de equipos.
                                                    </p>

                                                </div>

                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20informaci&oacute;n%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                        
                                </div>
                                <div class="card1 col-1-1" id="asesoria">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2">
                                            <img class="img-detallIn" src="./img/servicios/asesoria.png" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Asesoria</h2>
                                                <hr/>
                                                
                                                <p>
                                                3D INFORMATIK te ayudamos a decidir que equipo adquirir segun sus nececidades para estudiantes,la oficina, etc.
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Presupuesto r&aacute;pido</h5>
                                                    <p>
                                                    Env&iacute;a para que fines quiere adquirir un equipo y le asesoraremos de manera personalizada.
                                                    </p>
                                                    <h5>Asesor&iacute;a personalizada</h5>
                                                    

                                                </div>
                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20informaci&oacute;n%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
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
            {
  class SliderClip {
    constructor(el) {
      this.el = el;
      this.Slides = Array.from(this.el.querySelectorAll("li"));
      this.Nav = Array.from(this.el.querySelectorAll("nav a"));
      this.totalSlides = this.Slides.length;
      this.current = 0;
      this.autoPlay = true; //true or false
      this.timeTrans = 3000; //transition time in milliseconds
      this.IndexElements = [];

      for (let i = 0; i < this.totalSlides; i++) {
        this.IndexElements.push(i);
      }

      this.setCurret();
      this.initEvents();
    }
    setCurret() {
      this.Slides[this.current].classList.add("current");
      this.Nav[this.current].classList.add("current_dot");
    }
    initEvents() {
      const self = this;

      this.Nav.forEach((dot) => {
        dot.addEventListener("click", (ele) => {
          ele.preventDefault();
          this.changeSlide(this.Nav.indexOf(dot));
        });
      });

      this.el.addEventListener("mouseenter", () => (self.autoPlay = false));
      this.el.addEventListener("mouseleave", () => (self.autoPlay = true));

      setInterval(function () {
        if (self.autoPlay) {
          self.current =
            self.current < self.Slides.length - 1 ? self.current + 1 : 0;
          self.changeSlide(self.current);
        }
      }, this.timeTrans);
    }
    changeSlide(index) {
      this.Nav.forEach((allDot) => allDot.classList.remove("current_dot"));

      this.Slides.forEach((allSlides) =>
        allSlides.classList.remove("prev", "current")
      );

      const getAllPrev = (value) => value < index;

      const prevElements = this.IndexElements.filter(getAllPrev);

      prevElements.forEach((indexPrevEle) =>
        this.Slides[indexPrevEle].classList.add("prev")
      );

      this.Slides[index].classList.add("current");
      this.Nav[index].classList.add("current_dot");
    }
  }

  const slider = new SliderClip(document.querySelector(".slider"));
}

        </script>
	</div>
</body>
</html>
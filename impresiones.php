<?php
require_once "./config/config.php";
$inicio="";
$informatica="";
$impresiones="active";
$moviles="";
$galeria="";
$nosotros="";
$contacto="";
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
  <title>3D Informatic - Servicio de Impresiones 3D</title>

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
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
                <section class="intro">
                    <div class="left">
                        <div>
                        <span>Servicios</span>
                        <h1>Nuestro Servicio de Impresión 3D</h1>
                        <p>Facilitamos nuestra habilidad y experiencia para ofrecerte un servicio de modelado 3D y crear el archivo a partir de alguna idea que tengáis en mente, en un boceto o en un plano 2D. Convertimos tu idea en un modelo 3D.</p>
                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                        </div>
                    </div>

                    <div class="slider">
                        <ul>
                        <li style="background-image:url(./img/servicios/impresora.png)">
                            <div class="center-y">
                            <h3>Impresión 3D</h3>
                            <a href="#impresion">ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/Merchandising.jpeg)">
                            <div class="center-y">
                            <h3>Merchandising en 3D</h3>
                            <a href="#Merchandising">Ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/diseño.png)">
                            <div class="center-y">
                            <h3>Diseño 3D</h3>
                            <a href="#diseño">Ver mas</a>	
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
                <section class="content-box box-style-2 box-1" style="margin-bottom: 30px;">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Industrias</h2>
							</div>
							
						</div>
					</div>
				</section>
                <section class="container box-style-1 box-2">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                
								
                                <div class="col-1-4">
                                        <div class="impre ser_width1">
                                        <a class="icon-idus"><i class="fa fa-paint-brush"></i></a>
                                            <h2>Arte</h2>
                                            <hr/>
                                            <p>
                                            Convertimos tu idea en un modelo 3D listo para imprimir.
                                            </p>
                                        </div>
                                </div>
                                <div class="col-1-4">
                                        <div class="impre ser_width1">
                                        <a class="icon-idus"><i class="fa fa-building"></i></a>
                                            <h2>Arquitectura</h2>
                                            <hr/>
                                            <p>
                                            Obtenemos modelos tridimensionales de objetos físicos.
                                            </p>
                                        </div>
                                </div>
                                <div class="col-1-4">
                                        <div class="impre ser_width1">
                                        <a class="icon-idus"><i class="fa fa-graduation-cap"></i></a>
                                            <h2>Educación</h2>
                                            <hr/>
                                            <p>
                                            Estudiantes de ingeniería  pueden ver sus proyectos materializados. 
                                            </p>
                                        </div>
                                    
                                </div>
                                <div class="col-1-4">
                                        <div class="impre ser_width1">
                                        <a class="icon-idus"><i class="fa fa-pencil-square"></i></a>
                                            <h2>Publicidad</h2>
                                            <hr/>
                                            <p>
                                            Merchandising en 3D, productos personalizados, logos impresos, etc.
                                            </p>
                                        </div>
                                </div>
							</div>
						</div>
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
				<section class="content-box box-style-1 box-2">
					<div class="zerogrid" style="width: 100%">
						<div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                <div class="card col-1-1" id="impresion">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2 f-right">
                                            <img class="img-detall" src="./img/servicios/impresora.png" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Impresion 3D</h2>
                                                <hr/>
                                                <p>
                                                La impresión 3D es un grupo de tecnologías de fabricación por adición capaz de crear un objeto tridimensional mediante la superposición de capas sucesivas de un determinado material. 
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Presupuesto rápido</h5>
                                                    <p>
                                                    podéis enviar el archivo del diseño y valoramos costes y tiempo de impresión.
                                                    </p>
                                                    <h5>¿Qué puedo imprimir en 3D?</h5>
                                                    <p>
                                                    Al entrar en el mundo 3D, más descubrimos objetivos y cosas que podemos crear, solo tenemos que poner nuestra imaginación en marcha.
                                                    </p>

                                                </div>
                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                        
                                </div>
                                
                                <div class="card1 col-1-1" id="Merchandising">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2">
                                            <img class="img-detall" src="./img/servicios/Merchandising.jpeg" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Merchandising en 3D</h2>
                                                <hr/>
                                                
                                                <p>
                                                En 3D INFORMATIK creamos productos personalizados de su empresa para eventos y publicidad.
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Presupuesto rápido</h5>
                                                    <p>
                                                    Envía tus requerimientos para el diseño 3D y el material en que quieres hacerlo.
                                                    </p>
                                                    <h5>¿Qué podemos realizar?</h5>
                                                    <p>
                                                    Logos impresos, letras con slogan o para cualquier aplicación, llaveros personalizados corporativos, regalos originales para empleados, etc.
                                                    </p>

                                                </div>
                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                <div class="card col-1-1" id="diseño">
                                    <div class="row detalle_ser">
                                        <div class="col-1-2 f-right">
                                            <img class="img-detall" src="./img/servicios/diseño.png" alt="">
                                        </div>
                                        <div class="col-1-2 fond1">
                                            <div class="ser_width2 cont-detail">
                                                <h2>Diseño 3D</h2>
                                                <hr/>
                                                <p>
                                                En 3D INFORMATIK creamos el archivo a partir de alguna idea que tengáis en mente, en un boceto o en un plano 2D.
                                                </p>
                                                <div class="cont_ser">
                                                    <h5>Respuesta rápido</h5>
                                                    <p>
                                                    Creamos tu Modelo 3D y le enviamos para su aceptación o modificación, en breve tendrás el diseño.
                                                    </p>
                                                    <h5>Diseños 3D para sectores industriales</h5>
                                                    <p>
                                                    Arte, Arquitectura, Publicidad, Educación, etc.
                                                    </p>

                                                </div>

                                                <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
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
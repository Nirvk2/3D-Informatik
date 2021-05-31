<?php
require_once "./config/config.php";
$inicio="";
$informatica="";
$impresiones="";
$moviles="active";
$productos="";
$galeria="";
$nosotros="";
$contacto="";
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
  <title>3D Informatic - Servicios Moviles</title>

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
                <section class="intro">
                    <div class="left">
                        <div>
                        <span>Servicios</span>
                        <h1>Nuestros Servicios Moviles</h1>
                        <p>Reparamos tu móvil hoy mismo, sin cita previa, con Garantía.
Somos muy conscientes de la importancia que tiene el estar conectado al mundo. Por eso ofrecemos un servicio de diagnóstico y de reparación exprés. 
</p>
<a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                        </div>
                    </div>

                    <div class="slider">
                        <ul>
                        <li style="background-image:url(./img/servicios/pantallas-rota.png)">
                            <div class="center-y">
                            <h3>Aplicación de protectores de pantalla</h3>
                            <a href="#pantallas">ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/camaras.png)">
                            <div class="center-y">
                            <h3>Reparación Smartphone y Tablet</h3>
                            <a href="#camaras">Ver mas</a>	
                            </div>
                        </li>
                        <li style="background-image:url(./img/servicios/baterias.png)">
                            <div class="center-y">
                            <h3>Micro soldadura, cambio de componentes</h3>
                            <a href="#baterias">Ver mas</a>	
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
				<section class="container" id="servicios">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
                            <div class="row">
                                
								<div class="col-1-1">
                                    <div class="blog-card" id="pantallas">
                                        <div class="meta">
                                        <div class="photo" style="background-image: url(./img/servicios/pantallas-rota.png)"></div>
                                        <ul class="details">
                                            <li><a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a></li>
                                            
                                        </ul>
                                        </div>
                                        <div class="description">
                                        <h1>Aplicación de protectores de pantalla</h1>
                                        <h2>Reparamos todas las marcas</h2>
                                        <p> En 3D Informatik nos encargamos de reparar y reemplazar si fuera necesario la pantalla quebrada o dañada.</p>
                                        <p class="read-more">
                                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                        </p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-1-1">
                                    <div class="blog-card alt" id="camaras">
                                        <div class="meta">
                                        <div class="photo" style="background-image: url(./img/servicios/camaras.png)"></div>
                                        <ul class="details">
                                            <li><a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a></li>
                                            
                                        </ul>
                                        </div>
                                        <div class="description">
                                        <h1>Reparación Smartphone y Tablet</h1>
                                        <h2>Reparamos todas las marcas</h2>
                                        <p>3D Informatik reparará tu Smartphone dañado de manera rápida y confiable. Podemos ayudarte con actualizaciones de software IOS, liberar espacio de almacenamiento, configurar cuentas, diagnosticas fallas de Wifi / Bluetooth y reemplazar tu pantalla dañada, entre otros.</p>
                                        <p class="read-more">
                                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                        </p>
                                        </div>
                                    </div> 
                                 </div>  
                                 <div class="col-1-1">
                                    <div class="blog-card" id="baterias">
                                        <div class="meta">
                                        <div class="photo" style="background-image: url(./img/servicios/baterias.png)"></div>
                                        <ul class="details">
                                            <li><a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a></li>
                                            
                                        </ul>
                                        </div>
                                        <div class="description">
                                        <h1>Micro soldadura, cambio de componentes</h1>
                                        <h2>Reparamos todas las marcas</h2>
                                        <p>Es la técnica que se utiliza para conectar componentes metálicos de pequeño tamaño. Es necesaria una lente de ampliación para lograr una mayor precisión. Además, se requiere de un operador experto altamente capacitado que realice estas técnicas.</p>
                                        <p class="read-more">
                                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                        </p>
                                        </div>
                                    </div>
                                 </div>  
                                 <div class="col-1-1">
                                    <div class="blog-card alt">
                                        <div class="meta">
                                        <div class="photo" style="background-image: url(./img/servicios/socalo.png)"></div>
                                        <ul class="details">
                                            <li><a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a></li>
                                            
                                        </ul>
                                        </div>
                                        <div class="description">
                                        <h1>Venta de accesorios</h1>
                                        <h2>Reparamos todas las marcas</h2>
                                        <p>Contamos con repuestos originales de las principales marcas del mercado.</p>
                                        <p class="read-more">
                                        <a class="button" href="https://api.whatsapp.com/send?phone=+51936441860&text=Hola%20necesito%20información%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i>Consultar</a>
                                        </p>
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
      this.timeTrans = 4000; //transition time in milliseconds
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
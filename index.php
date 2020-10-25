<?php 
	//if ($_SERVER['HTTPS'] == "on") {
	 //   $url = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	//    header("Location: $url");
	//    exit;
	//}
 ?>
<!DOCTYPE html>
<html lang="es">
	<meta charset="utf-8">
  <meta content="PANDAMA" name="author">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>TLSAT México | Servicios de Telecomunicaciones Satelitales y Soluciones de Seguridad</title>
	<meta name="description" content=""/>
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700|Raleway:400,700" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/tlsat.ico">
	<link rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animations.css"/>
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177641029-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-177641029-1');
    </script>

</head>
<body>
	<header>
	    <!-- (<figure><a href="#"><img src="img/tlsat-white.png" alt="TLSAT México"></a></figure>) -->
	    <figure><a href="https://docs.google.com/spreadsheets/d/1vfQFidGqNgYnmpnaf4Mw5Lc-bIA-e9tqPizYIw-MuSI/edit?usp=sharing"><img src="img/tlsat-white.png" alt="TLSAT México"></a></figure>
		<nav>
			<button class="mobile"><span class="line"></span></button>
			<ul>
				<li class="activate">INICIO ></li>
				<li><a href="nosotros/">NOSOTROS ></a></li>
				<li><a href="servicios/">SERVICIOS ></a></li>
				<li><a href="contacto/">CONTACTO ></a></li>
			</ul>
		</nav>
		<ol>
			<li><a href="https://www.facebook.com/profile.php?id=112338903495718&ref=br_rs" target="_blank"><img src="img/sm-facebook-white.png" alt="Facebook"></a></li>
			<li><a href="https://www.linkedin.com/in/ulises-alejandro-vidal-gonz%C3%A1lez-377683101/" target="_blank"><img src="img/sm-linkedin-white.png" alt="Linkedin"></a></li>
		</ol>
	</header>
	<section id="home">
		<div>
			<video muted="muted" autoplay loop>
			  <source src="img/video.webm" type='video/webm; codecs="vp8, vorbis"'/>
			</video>
		</div>
		<h3>SERVICIOS DE...</h3>
		<h1>TELECOMUNICACIONES Y ENERGÍA</h1>
		<h3>SOLUCIONES DE SEGURIDAD</h3>
		<button id="button-services"><a href="servicios/">NUESTROS SERVICIOS</a></button>
		<button id="button-contact"><a href="contacto/">ATENCIÓN PERSONALIZADA</a></button>
		<h4>¡CONÓCENOS!</h4>
		<img src="img/arrow-down.png" alt="Ver más">
	</section>
	<section id="home-services-desktop">
		<article>
			<div class="service-1">
				<h3>SERVICIOS DE VOZ</h3>
				<a href="servicios/">SABER MÁS</a>
			</div>
			<div class="service-2">
				<h3>CABLEADO Y ESTRUCTURADO DE FIBRA ÓPTICA</h3>
				<a href="servicios/">SABER MÁS</a>
			</div>
			<div class="service-3">
				<h3>TV VÍA SATÉLITE</h3>
				<a href="servicios/">SABER MÁS</a>
			</div>
		</article>
		<article>
			<div class="service-4">
				<h3>SISTEMA DE CCTV</h3>
				<a href="servicios/">SABER MÁS</a>
			</div>
			<div class="service-5">
				<h3>INTERNET SATELITAL</h3>
				<a href="servicios/">SABER MÁS</a>
			</div>
		</article>
		<article>
			<div class="service-6">
				<h3>LA COMPAÑIA</h3>
				<a href="nosotros/">SABER MÁS</a>
			</div>
		</article>
		<button><a href="contacto/">PLATICA CON UN EXPERTO</a></button>
	</section>
	<section id="home-services-mobile">
			<div id="owl-services" class="owl-carousel owl-theme">
				<div class="service-element">
					<img src="img/bg-voz-mobile.png">
					<h3>SERVICIOS DE VOZ</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
				<div class="service-element">
					<img src="img/bg-cableado-mobile.png">
					<h3>CABLEADO Y ESTRUCTURADO DE FIBRA ÓPTICA</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
				<div class="service-element">
					<img src="img/bg-tv-satelital-mobile.png">
					<h3>TV VÍA SATÉLITE</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
				<div class="service-element">
					<img src="img/bg-cctv-mobile.png">
					<h3>SISTEMA DE CCTV</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
				<div class="service-element">
					<img src="img/bg-internet-mobile.png">
					<h3>INTERNET SATELITAL</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
				<div class="service-element">
					<img src="img/bg-company.png">
					<h3>LA COMPAÑIA</h3>
					<a href="servicios/">SABER MÁS</a>
				</div>
			</div>
		<button><a href="contacto/">PLATICA CON UN EXPERTO</a></button>
	</section>
	<footer>
		<section id="clients">
			<h2>NUESTROS CLIENTES</h2>
			<div id="owl-clients" class="owl-carousel owl-theme">
				<img src="img/client-001.png">
				<img src="img/client-002.png">
				<img src="img/client-003.png">
				<img src="img/client-004.png">
				<img src="img/client-005.png">
				<img src="img/client-006.png">
				<img src="img/client-007.png">
				<img src="img/client-008.png">
				<img src="img/client-009.png">
				<img src="img/client-010.png">
				<img src="img/client-011.png">
				<img src="img/client-012.png">
				<img src="img/client-013.png">
				<img src="img/client-014.png">
				<img src="img/client-015.png">
				<img src="img/client-016.png">
				<img src="img/client-017.png">
				<img src="img/client-018.png">
				<img src="img/client-019.png">
				<img src="img/client-020.png">
			</div>
			<div><button id="platica"><a href="contacto/">PLATICA CON UN EXPERTO</a></button></div>
		</section>
		<section id="insights">
			<article id="menu">
				<ul>
					<li><a href="#">INICIO</a></li>
					<li><a href="nosotros/">NOSOTROS</a></li>
					<li><a href="servicios/">SERVICIOS</a></li>
					<li><a href="contacto/">CONTACTO</a></li>
				</ul>
			</article>
			<article id="contact-information">
				<div>
					<p>Calle 34 #164 Planta Baja Col. Centro</p>
					<p>Cd. del Carmen, Campeche<br>24100, México.</p>
					<p>u.vidal@tlsatmex.com</p>	
				</div>
				<div>
					<h4>Teléfonos:</h4>
					<br/>
					<span><img src="img/icon-phone-white.png">+52 1 (938) 286 12 36</span>
					<span><img src="img/icon-whatsapp-white.png">+52 1 (938) 150 62 09</span>
				</div>
			</article>
			<article id="social-media">
				<h4>SOCIAL</h4>
				<ol>
					<li><a href="https://www.facebook.com/profile.php?id=112338903495718&ref=br_rs" target="_blank"><img src="img/sm-facebook-white.png" alt="Facebook"></a></li>
					<li><a href="https://www.linkedin.com/in/ulises-alejandro-vidal-gonz%C3%A1lez-377683101/" target="_blank"><img src="img/sm-linkedin-white.png" alt="Linkedin"></a></li>
				</ol>
			</article>
			<article id="tlsat-desktop">
				<img src="img/logo-white.png" alt="TLSAT México">
			</article>
			<article id="tlsat-mobile">
				<img src="img/logo-color.png" alt="TLSAT México">
			</article>
		</section>
		<section id="copyright">
			<p>© Derechos reservados. TLSAT 18N 91W S. de R.L. de C.V. Prohibida su reproducción total o parcial.</p>
		</section>
	
	</footer>
	<div id="pandama"><p>Creado por</p><a href="http://pandama.mx/" target="_blank"><img src="img/pandama-white.png" alt="PANDAMA STUDIO"></a></div>
	<script src="js/jquery.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146427220-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-146427220-1');
	</script>
</body>
</html>
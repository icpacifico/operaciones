<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- <link rel="canonical" href="https://icpacifico.cl" /> -->
    <title>@yield('title','Inmobiliaria Costanera Pacífico - La Serena - Chile') </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Condominio Pacífico 2800, Avda. Pacífico en La Serena. Departamentos en venta de 2 y 3 dormitorios. Inversión Inmobiliaria, ideal inversores. A pasos de la playa.">

	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/aos/dist/aos.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/bootstrap-touch-slider.css')}}"/>
	
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/sweetalert2/dist/sweetalert2.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/fontawesome-free-v6/css/all.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/app.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/style.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/main.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/home.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/sliders/slider4.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/sliders/slider_proyecto.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/animate.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/unitegallery/dist/css/unite-gallery.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('resources/css/headers1-10.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Vite::asset('node_modules/fancybox/dist/css/jquery.fancybox.css')}}"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	<!-- <link href="{{ Vite::asset('resources/sliders/slick-theme.css') }}" rel="stylesheet"> -->
	@yield('style')
</head>
<body>
<div class="preloader" >
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Constanera Pacífico</p>
    </div>
</div>

<header class="topbar" id="main_header"> <!-- area de menu -->
    <div class="container-md">	
   		<nav class="navbar navbar-expand-lg navbar-dark py-md-0 w-100">
			<a class="navbar-brand py-0" href="./">
				<img src="{{ Vite::asset('resources/img/logo-top.png') }}" class="align-top ml-md-1" alt="Inmobiliaria Costanera Pacífico">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse hover-dropdown ms-5" id="navmenu">
				<div class="ms-5">
					<ul class="navbar-nav text-center mt-2">
						<li id="act_" class="nav-item ml-md-2">
							<a class="nav-link" href="./"><i class="fa-solid fa-house"></i></a>
						</li>
						<!-- <li id="act_proyectos" class="nav-item ml-md-2">
							<a class="nav-link" href="./proyectos/1/pacifico-2800">El Proyecto</a>
						</li> -->
						<li id="act_proyectos" class="nav-item dropdown ml-md-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Proyectos en Venta <i class="fas fa-angle-down"></i>
							</a>
							<ul class="b-none dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="./proyectos/7/distrito-verde-etapa-1">Distrito Verde | Etapa I</a></li>
								<li><a class="dropdown-item" href="./proyectos/5/pacifico-3100-etapa-2">Pacífico 3100 | Etapa II</a></li>
								<li class="vendido"><a class="dropdown-item" href="./proyectos/3/pacifico-3100-etapa-1">Pacífico 3100 | Etapa I</a></li>
								<!--<li class="vendido"><a class="dropdown-item disabled" aria-disabled="true" title="100% VENIDO" href="./proyectos/2/pacifico-2800-etapa-2">Pacífico 2800 | Etapa II</a></li>-->
								<li class="vendido"><a class="dropdown-item disabled" aria-disabled="true" title="100% VENIDO">Pacífico 2800 | Etapa II</a></li>
								<li class="vendido"><a class="dropdown-item disabled" aria-disabled="true" title="100% VENIDO">Pacífico 2800 | Etapa I</a></li>
							</ul>
						</li>
						<li id="act_equipo" class="nav-item dropdown ml-md-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Equipo Inmobiliaria <i class="fas fa-angle-down"></i>
							</a>
							<ul class="b-none dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="./ventas">Equipo de Ventas</a></li>
								<li><a class="dropdown-item" href="./operaciones">Equipo de Operaciones</a></li>
								<li><a class="dropdown-item" href="./postventa">Equipo Post Venta</a></li>
							</ul>
						</li>
						<!--<li id="act_equipo" class="nav-item ml-md-2">
							<a class="nav-link" href="./equipo">Equipo de Ventas</a>
						</li>-->
						<li id="act_ais" class="nav-item ml-md-2">
							<a class="nav-link" href="./ais">Ais ®</a>
						</li>
						<!-- <li id="act_noticias" class="nav-item ml-md-2">
							<a class="nav-link" href="./noticias">Noticias</a>
						</li> -->
						<!-- <li id="act_arriendos" class="nav-item ml-md-2">
							<a class="nav-link" href="./arriendos">Arriendos</a>
						</li> -->
						<li id="act_nosotros" class="nav-item ml-md-2">
							<a class="nav-link" href="./nosotros">Nosotros</a>
						</li>
						<li id="act_contacto" class="nav-item ml-md-2">
							<a class="nav-link" href="./contacto">Contáctenos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    </div>
</header>

@section('content')

    @show






<footer>
<div class="container">
    <div class="row">
    	<div class="col-md-3 text-center text-md-left">
    		<img src="{{Vite::asset('resources/img/logo-pie.png')}}" alt="Condominio Pacífico 2800">
    	</div>
    	<div class="col-md-3 presenta antialias text-center text-md-left">
    		<h5>Vende</h5>
    		<?php
            // $consulta = 
            //         "
            //         SELECT 
            //             * 
            //         FROM 
            //             seccion_seccion 
            //         WHERE 
            //             id_sec = 1
            //         ";
            // $conexion->consulta($consulta);
            // $cantidad = $conexion->total();
            // $fila = $conexion->extraer_registro_unico();
            // $nombre_adm_sec = utf8_encode($fila["nombre_sec"]);
            // $contenido_adm_sec = utf8_encode($fila["descripcion_sec"]);
            // $subtitulo_adm_sec = utf8_encode($fila["subtitulo_sec"]);
            ?>
			<?php /*echo $contenido_adm_sec; */?>
    	</div>
    	<div class="col-md-3 antialias navega text-center text-md-left">
    		<h5>Navegación</h5>
    		<ul>
    			<li><a href="/">Inicio</a></li>
                <li><a href="./proyectos/7/distrito-verde-etapa-1">Distrito Verde</a></li>
    			<li><a href="./proyectos/2/pacifico-2800-etapa-2">Pacífico 2800</a></li>
                <li><a href="./proyectos/3/pacifico-3100-etapa-1">Pacífico 3100</a></li>
    			<li><a href="./ais">Ais ®</a></li>
    			<!-- <li><a href="./noticias">Noticias</a></li> -->
    			<!-- <li><a href="./arriendos">Arriendos</a></li> -->
    			<li><a href="./nosotros">Nosotros</a></li>
    			<li><a href="./contacto">Contáctenos</a></li>
    		</ul>
    	</div>
    	<div class="col-md-3 sociales antialias text-center text-md-left">
    		<h5>Sala de Ventas</h5>
    		<?php
            // $consulta = 
            //         "
            //         SELECT 
            //             * 
            //         FROM 
            //             seccion_seccion 
            //         WHERE 
            //             id_sec = 2
            //         ";
            // $conexion->consulta($consulta);
            // $cantidad = $conexion->total();
            // $fila = $conexion->extraer_registro_unico();
            // $nombre_adm_sec = utf8_encode($fila["nombre_sec"]);
            // $contenido_adm_sec = utf8_encode($fila["descripcion_sec"]);
            // $subtitulo_adm_sec = utf8_encode($fila["subtitulo_sec"]);
            ?>
			<?php/* echo $contenido_adm_sec;*/ ?>
			
			<!-- <div> -->
			<div class="round-social light">
                <a href="https://www.facebook.com/icpacifico/" target="_blank" class="link"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/costanerapacifico/" target="_blank" class="link"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCGLj407ig6S3XhOdnt2MJew" class="link" target="_blank"><i class="fab fa-youtube"></i></a>
                <!-- <a href="https://www.linkedin.com/company/inmobiliaria-costanera-pacifico" target="_blank" class="link"><i class="fab fa-linkedin-in"></i></a> -->
            </div>
    	</div>
    </div>
</div>
<!-- <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"1dcf1a21c87d82ad19000315ebd3dad7"})});</script> -->

</footer>
<section id="last_pie">
<div class="container">
    <div class="row">
        <div class="col desarrollador">
            <p>2020. Desarrollado por <a href="http://www.proyectarse.com" target="_blank">Proyectarse.com</a></p>
        </div>
    </div>
</div>
</section>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="{{Vite::asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{Vite::asset('node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{Vite::asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="./js/ie10-viewport-bug-workaround.js"></script> -->
<script src="{{Vite::asset('node_modules/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{Vite::asset('resources/js/slide.js')}}"></script>
<!-- This is for the animation -->
<script src="{{Vite::asset('node_modules/aos/dist/aos.js')}}"></script>
<script src="{{Vite::asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>


<script type="text/javascript" src="{{Vite::asset('node_modules/jquery-touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<!-- <script src="./node_modules/bootstrap-touch-slider/bootstrap-touch-slider.js"></script> -->
<!-- <script type="text/javascript" src="./js/notify.js"></script> -->
<script type="text/javascript" src="{{Vite::asset('node_modules/fancybox/dist/js/jquery.fancybox.js')}}"></script>

<script type="text/javascript" src="{{Vite::asset('node_modules/unitegallery/dist/js/unitegallery.min.js')}}"></script>
<script type="text/javascript" src="{{Vite::asset('node_modules/unitegallery/dist/themes/slider/ug-theme-slider.js')}}"></script>
<script type="text/javascript" src="{{Vite::asset('node_modules/toastr/toastr.js')}}"></script>
<!-- Slimscroll -->
<!-- <script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){		
	$('.slider2').slick({
		dots: true,
		  infinite: true,
		  slidesToShow: 1,
		  adaptiveHeight: true
	});
	function agendarVideoLlamada(){
		dataLayer.push({'event': 'agenda-click'});
	    $.fancybox.open({
	        src : 'https://calendly.com/icpacifico/reunion-virtual',
	        type : 'iframe',
	        opts : {
	            iframe : {
	                css : {
	                    width: '100%'
	                },
	                attr : {
	                    scrolling : 'no'
	                }
	            },
	            afterClose : function() {

	            }
	        }
	    });
	}

	$(document).ready(function() {		
		
		setTimeout(
		  function() 
		  {
		    $( ".unico" ).addClass( "fademio" );
		   
		  }, 50);


	    $(document).on("click", ".click_caja", function() {
	    	$("div.click_caja").addClass("oculta");
	    });
	});
	//Fix header while scroll
    // ============================================================== 
    var wind = $(window);
    wind.on("load", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".topbar");
        if (bodyScroll > 100) {
            navbar.addClass("fixed-header animated slideInDown")
        } else {
            navbar.removeClass("fixed-header animated slideInDown")
        }
    });

	$(function () {
        $(".preloader").fadeOut();
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('.topbar').addClass('fixed-header animated slideInDown');
            // $('.bt-top').addClass('visible');
        } else {
            $('.topbar').removeClass('fixed-header animated slideInDown');
            // $('.bt-top').removeClass('visible');
        }
    });

	AOS.init({
        easing: 'ease-in-out-sine'
      });

});
$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    container: 'body'
  })
})
 @yield('script')       
</script>
</body>
</html>
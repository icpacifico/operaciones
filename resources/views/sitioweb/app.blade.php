<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="canonical" href="https://icpacifico.cl" />
    <title>@yield('title','Inmobiliaria Costanera Pacífico - La Serena - Chile') </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Condominio Distrito Verde,  Emilio Apey 405, La Serena. Departamentos en venta cercanos a universidades, Avenida del Mar y Ruta 5">	
	<meta property="og:url" content="https://icpacifico.cl">
	<meta property="og:type" content="article">
	<meta property="og:image" content="{{ Vite::asset('resources/img/ogimage.jpg') }}" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="500" />
	<meta name="keywords" content="departamento, departamentos en venta, departamentos en la serena,venta de departamentos, departamentos para inversion, avenida pacífico, la serena, chile">
	<meta name="author" content="icpacifico.cl">
	<link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
	@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
		.navbar-nav li.nav-item ul li.vendido{
			background-color: rgba(240,240,240,.4);
			background-image: url({{Vite::asset('resources/img/vendido_bot.png')}});
			background-repeat: no-repeat;
			background-position: top right;
			background-size: contain;
		}
		#banner-top{
			background-color: #89816B;
			/*min-height: 50vh;*/
			padding-top: 128px;
			padding-bottom: 32px;
			background-image: url({{Vite::asset('resources/img/bg-interior.jpg')}});
			background-repeat: no-repeat;
			-webkit-background-size: contain;
			background-size: contain;
			background-attachment: fixed;
		}
		/* Extra Small devices (phones) */
		@media (max-width: 767px) { 
			#banner-top{
				background-color: #89816B;
				/*min-height: 50vh;*/
				padding-top: 128px;
				padding-bottom: 32px;
				background-image: url({{Vite::asset('resources/img/bg-interior.jpg')}});
				background-repeat: no-repeat;
				-webkit-background-size: cover;
				background-size: cover;
				background-attachment: normal;
			}
		}
		#presenta .caja.uno{
   			background-image: url({{Vite::asset('resources/img/caja_1.jpg')}});
		}

		#presenta .caja.dos{
			background-image: url({{Vite::asset('resources/img/caja_2.jpg')}});
		}
	</style>
	@yield('style')
	
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" crossorigin="anonymous"></script>
  <script>
	(adsbygoogle = window.adsbygoogle || []).push({
	  google_ad_client: "ca-pub-1054465047182212",
	  enable_page_level_ads: true
	});
  </script>
  
  <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"1dcf1a21c87d82ad19000315ebd3dad7"})});</script>
  <x-tagmanager-head />
</head>
<body>
	<x-tagmanager-body />


<div class="preloader" >
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Constanera Pacífico</p>
    </div>
</div>

<header class="topbar" id="main_header"> <!-- area de menu -->
    <div class="container">
		<div class="row justify-content-center">
			<div class="col-9 align-self-center">
				<nav class="navbar navbar-expand-lg navbar-dark py-md-0 w-100">
					<a class="navbar-brand py-0 me-5" href="{{ route('/') }}">
						<img src="{{ Vite::asset('resources/img/logo-top.png') }}" alt="Inmobiliaria Costanera Pacífico">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse hover-dropdown ms-5" id="navmenu">
						<div class="ms-5">
							<ul class="navbar-nav text-center mt-2">
								<li id="act_" class="nav-item ml-md-2 {{ request()->path() == "/" ? 'active' : '' }}" >
									<a class="nav-link" href="{{ route('/') }}"><i class="fa-solid fa-building"></i></a> 
								</li>						
								<li id="act_proyectos" class="nav-item dropdown ml-md-1 {{ (request()->path() == "proyectos/distrito-verde-etapa-1" || request()->path() == "proyectos/pacifico-3100-etapa-2" || request()->path() == "proyectos/pacifico-3100-etapa-1") ? 'active' : '' }}">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Proyectos en Venta <i class="fas fa-angle-down"></i>
									</a>
									<ul class="b-none dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item {{ request()->path() == "proyectos/distrito-verde-etapa-1" ? 'active' : '' }}" href="{{route('proyectos.distrito-verde-etapa-1')}}">Distrito Verde | Etapa I</a></li>
										<li><a class="dropdown-item {{ request()->path() == "proyectos/distrito-verde-etapa-2" ? 'active' : '' }}" href="{{route('proyectos.distrito-verde-etapa-2')}}">Distrito Verde | Etapa II</a></li>
										<li><a class="dropdown-item {{ request()->path() == "proyectos/pacifico-3100-etapa-2" ? 'active' : '' }}" href="{{route('proyectos.pacifico-3100-etapa-2')}}">Pacífico 3100 | Etapa II</a></li>
										<li class="vendido"><a class="dropdown-item {{ request()->path() == "proyectos/pacifico-3100-etapa-1" ? 'active' : '' }}" href="{{route('proyectos.pacifico-3100-etapa-1')}}">Pacífico 3100 | Etapa I</a></li>								
										<li class="vendido"><a class="dropdown-item disabled" aria-disabled="true" title="100% VENIDO">Pacífico 2800 | Etapa II</a></li>
										<li class="vendido"><a class="dropdown-item disabled" aria-disabled="true" title="100% VENIDO">Pacífico 2800 | Etapa I</a></li>
									</ul>
								</li>
								<li id="act_equipo" class="nav-item dropdown ml-md-1 {{ (request()->path() == "ventas" || request()->path() == "operaciones" || request()->path() == "postventa") ? 'active' : '' }}">
									<a class="nav-link dropdown-toggle" href="{{route('ventas')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Equipo Inmobiliaria <i class="fas fa-angle-down"></i>
									</a>
									<ul class="b-none dropdown-menu animated fadeIn " aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item {{ request()->path() == "ventas" ? 'active' : '' }}" href="{{route('ventas')}}">Equipo de Ventas</a></li>
										<li><a class="dropdown-item {{ request()->path() == "operaciones" ? 'active' : '' }}" href="{{route('operaciones')}}">Equipo de Operaciones</a></li>
										<li><a class="dropdown-item {{ request()->path() == "postventa" ? 'active' : '' }}" href="{{route('postventa')}}">Equipo Post Venta</a></li>
									</ul>
								</li>						
								<li id="act_ais" class="nav-item ml-md-2 {{ request()->path() == "ais" ? 'active' : '' }}">
									<a class="nav-link" href="{{ route('ais') }}">Ais ®</a>
								</li>						
								<li id="act_nosotros" class="nav-item ml-md-2 {{ request()->path() == "nosotros" ? 'active' : '' }}">
									<a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
								</li>
								<li id="act_contacto" class="nav-item ml-md-2 {{ request()->path() == "contacto" ? 'active' : '' }}">
									<a class="nav-link" href="{{ route('contacto') }}">Contáctenos</a>
								</li>
								<li class="nav-item ml-md-2">
									@if (Illuminate\Support\Facades\Auth::check())
									<form action="{{ url('logout') }}" method="POST">
										@csrf
										<button class="nav-link" type="submit">cerrar sesión</button>
									</form>
									@endif						
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div> <!-- fin .col-9 -->
	    </div> <!-- fin .row-->
    </div> <!-- fin .container-->
	@yield('header')      
</header>

@section('content')
    @show
<footer>
<div class="container">
    <div class="row">
    	<div class="col-md-3 text-md-start text-sm-center text-center">
    		<img src="{{Vite::asset('resources/img/logo-pie.png')}}" alt="Condominio Pacífico 2800">
    	</div>
    	<div class="col-md-3 text-md-start text-sm-center text-center">
    		<h5>Vende</h5>
    		{!!App\Models\Seccion::find(1)->descripcion_sec!!}
    	</div>
    	<div class="col-md-3 antialias navega text-md-start text-sm-center text-center">
    		<h5>Navegación</h5>
    		<ul>
    			<li><a href="{{ route('/')}}">Inicio</a></li>
                <li><a href="{{route('proyectos.distrito-verde-etapa-1')}}">Distrito Verde</a></li>
    			<li><a href="{{route('proyectos.pacifico-3100-etapa-2')}}">Pacífico 2800</a></li>
                <li><a href="{{route('proyectos.pacifico-3100-etapa-1')}}">Pacífico 3100</a></li>
    			<li><a href="{{ route('ais')}}">Ais ®</a></li>    			
    			<li><a href="{{ route('nosotros')}}">Nosotros</a></li>
    			<li><a href="{{ route('contacto')}}">Contáctenos</a></li>
    		</ul>
    	</div>
    	<div class="col-md-3 sociales antialias text-md-start text-sm-center text-center">
    		<h5>Sala de Ventas</h5>
			{!!App\Models\Seccion::find(2)->descripcion_sec!!}    		
			<div class="round-social light">
                <a href="https://www.facebook.com/icpacifico/" target="_blank" class="link"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/costanerapacifico/" target="_blank" class="link"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCGLj407ig6S3XhOdnt2MJew" class="link" target="_blank"><i class="fab fa-youtube"></i></a>
                <!-- <a href="https://www.linkedin.com/company/inmobiliaria-costanera-pacifico" target="_blank" class="link"><i class="fab fa-linkedin-in"></i></a> -->
            </div>
    	</div>
    </div>
</div>
</footer>
<section id="last_pie">
<div class="container">
    <div class="row">
        <div class="col desarrollador">
            <p>2022. Desarrollado por <b>Osman Ahumada</b></p>
        </div>
    </div>
</div>
</section>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" charset="utf-8"></script>
<script>	
// function onPixel() {
// 		fbq('track', 'SubmitApplication');
// 	}	
	$(".preloader").fadeOut();

		$('.slider2').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
			adaptiveHeight: true
		});		
		$('.videollamada').on('click',function(){
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
		})							
		   setTimeout(
			function() 
			{
				$( ".unico" ).addClass( "fademio" );
			
			}, 50);


			$(document).on("click", ".click_caja", function() {
				$("div.click_caja").addClass("oculta");
			});
		
		
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
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 100) {
				$('.topbar').addClass('fixed-header animated slideInDown');
			
			} else {
				$('.topbar').removeClass('fixed-header animated slideInDown');
			
			}
		});		
	
	
	    
</script>
<script>
	var numeros = ['+56948596196','+56954126944','+56954130065','+56947960446','+56954126943']
	var random = Math.floor((Math.random() * 5));
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?70491';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Contáctanos",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Inmobiliaria Costanera Pacífico",
      "brandSubTitle":"",
      "brandImg":"{{ Vite::asset('resources/img/logo-chat.jpg') }}",
      "welcomeText":"Hola, podemos ayudarte?\nContáctanos",
      "messageText":"Hola, tengo una pregunta sobre {{route('/')}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":numeros[random]
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW4QL7Q"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

@yield('script')   
</body>
</html>
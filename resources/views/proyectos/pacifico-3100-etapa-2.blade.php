@extends('sitioweb.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/css/unite-gallery.min.css" integrity="sha512-EViDct/SXnZMMG2ZDK7E2r3o/rDIwocOkVYpEvbMM/4Mr3on8V70n7dLcLdOrVyPuvEFyqQzya1YPNV1DFlf0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
<style>		
	#banner-pac3100-2{    
		padding-top: 145px;
		padding-bottom: 0px;
	}

	#banner-pac3100-2 .carousel{
		height: 73vh;
	}

	#banner-pac3100-2 .carousel-inner {
		height: 100%;
	}

	#banner-pac3100-2 .carousel .carousel-item {
	height: 74vh;
	background-color: #e8e8e8;
	}

	#banner-pac3100-2 .carousel .carousel-item img{
	max-width: 100%;
	}

	/* Small devices (tablets, 768px and up) */
	@media (max-width: 768px) {
		#banner-pac3100-2 .carousel{
			height: 30vh;
		}

		#banner-pac3100-2 .carousel-inner {
			height: 100%;
		}

		#banner-pac3100-2 .carousel .carousel-item {
		height: 30vh;
		background-color: #e8e8e8;
		}

	}

	/*solo si se carga como fondo*/
	#banner-pac3100-2 .fill {
		width: 100%;
		height: 100%;
		position: absolute;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		-o-background-size: cover;
	}

	@media (min-width: 768px) {
	#banner-pac3100-2 .fill {
		width: 65%;
		height: 100%;
		position: absolute;
		background-position: center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		-o-background-size: cover;
	}
	}


	#banner-pac3100-2 #carouselweb .carousel-caption {
		position: absolute;
		right: 4%;
		left: auto;
		top: 20px;
		color:#333333;
		padding-top: 20px;
		padding-bottom: 20px;
		text-align: left;
		z-index: 12;
		width: 210px;
	}

	@media (max-width: 760px) {
		#banner-pac3100-2 #carouselweb .carousel-caption h3{
			background-color: rgba(0, 0, 0, .7);
			padding: 10px 5px;
		}

		#banner-pac3100-2 #carouselweb .carousel-caption {
			width: 95%;
		}
	}

	#banner-pac3100-2 #carouselweb .carousel-caption h3{
	display: inline-block;
	font-size: 1.1rem;
	line-height: 1.45rem;
	}

	#banner-pac3100-2 #carouselweb .carousel-caption p{
	font-size: .95rem;
	text-align: justify;
	}


	#banner-pac3100-2 .carousel-item #textos{
		position: absolute;
		z-index: 10;
		right: 0;
	}

	@media (max-width: 768px) {
		#banner-pac3100-2 .container-fluid{
			padding-right: 0 !important;
			padding-left: 0 !important;
		}
	}


	#banner-pac3100-2 .galeria{
		max-height: 290px;
		overflow-y: hidden;
	}

	@media (max-width: 767px) { 
		#banner-pac3100-2{
			/*background-color: #89816B;*/
			/*min-height: 50vh;*/
			padding-top: 108px;
		}

		#banner-pac3100-2 .galeria{
			max-height: 700px;
			overflow-y: hidden;
		}
	}

	#banner-pac3100-2 .azul{
		background-color: #59a4d3;
	}  

	#banner-pac3100-2 .morado{
		background-color: #ff008d;
	}  

	#banner-pac3100-2 .verde{
		background-color: #a3bd33;
	}

	#banner-pac3100-2 h3{
		font-size: 2rem;
		padding-top: 25px;
		font-weight: 400;
		padding-bottom: 21px;
		text-align: center;
		color: #FFFFFF;
	}

	@media (max-width: 767px) { 
		#banner-pac3100-2 h3{
			font-size: 1rem;
			padding-top: 4px;
			font-weight: 400;
			text-align: center;
			line-height: 20px;
			color: #FFFFFF;
		}
	}

	/*#presenta*/
	#presenta{
		padding-top: 60px;
		text-align: justify;
		padding-bottom: 40px;
	}

	#presenta .detalles{
		font-weight: 300;
		font-size: .9rem;
	}

	.tabcontent-border {
		border: 1px solid #ddd;
		border-top: 0px;
		box-shadow: 1px 1px 4px rgba(136, 136, 136, .5);
	}

	#presenta .nav-tabs .nav-link.active,
	#presenta .nav-tabs .nav-item.show .nav-link {
		color: #495057;
		background-color: #fff;
		border-color: #dee2e6 #dee2e6 #fff;
	}

	#presenta .nav-tabs .nav-link {
		border: 1px solid transparent;
		border-top-left-radius: 0.25rem;
		border-top-right-radius: 0.25rem;
		background-color: rgba(0,0,0,.05);
		color: #495057;
	}

	@media (max-width: 768px) {
		#presenta .nav-tabs .nav-link {
			display: block;
			padding: 0.5rem .4rem;
			font-size: 14px;
		}
	}

	#presenta .nav-tabs .nav-link.verde {
		border: 1px solid transparent;
		border-top-left-radius: 0.25rem;
		border-top-right-radius: 0.25rem;
		background-color: rgba(163,189,51,.3);
		color: #495057;
	}

	#presenta h2,
	#modelos h2,
	#ubicacion h2,
	#cotizacion h2{
		font-family: 'Oswald', sans-serif;
		font-size: 1.8rem;
		font-weight: 300;
		text-align: center;
		color: #5E5E5E;
	}

	/*Virtuales*/
	#virtual{
		padding-top: 20px;
		text-align: justify;

	}

	#virtual .flotante_virtual{
		position: absolute;
		cursor: pointer;
		z-index: 10;
		width: 280px;
		min-height: 120px;
		text-align: center;
		padding: 10px 15px;
		bottom: 6px;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		transition: all 0.4s;
		right: -140px;
		background-color: rgba(255,255,255,.9);
	}

	#virtual .flotante_virtual.click_caja.oculta{
		bottom: -75px;
		right: -140px;
		cursor: default;
		min-height: 74px;
	}

	.bajo_recor{
		margin-top: -5px;
	}

	#virtual .verde_360{
		background-color: #a3bd33;
		width: 280px;
		text-align: center;
		padding: 12px 0px;
	}

	@media (max-width: 768px) {
		#virtual .verde_360{
			background-color: #a3bd33;
			width: 100%;
			text-align: center;
			padding: 12px 0px;
		}
	}

	#virtual .flotante_virtual p{
		font-family: 'Oswald', sans-serif;
		font-weight: 300;
		font-size: 1rem;
	}

	#virtual .ver_recor{
		padding: 10px 38px;
		background-color: #FFFFFF;
		text-align: center;
	}

	#virtual .ver_recor p{
		margin-bottom: 0;
		font-family: 'Oswald', sans-serif;
		font-weight: 300;
		font-size: 1.15rem;
	}

	#virtual .virtuales iframe.frames{
		height: 410px;
	}

	@media (max-width: 768px) {
		#virtual .virtuales iframe.frames{
			height: 200px;
		}
	}

	/*modelos*/
	#modelos{
		padding-bottom: 40px;
		padding-top: 50px;
	}

	#modelos .nav-tabs .nav-link.active, #modelos .nav-tabs .nav-item.show .nav-link {
		color: #495057;
		background-color: #fff;
		font-size: 1.3rem;
		border-color: #dee2e6 #dee2e6 #fff;
	}

	#modelos .nav-tabs .nav-link {
		color: #aaaaaa;
		background-color: #fff;
		font-size: 1.3rem;
		border-color: #dee2e6 #dee2e6 #dee2e6;
	}

	#modelos .btn.sub{
		background: #a3bd33;
		border: 0px;
		border-radius: 0;
		padding: 14px 32px;
		font-family: 'Oswald', sans-serif;
		font-weight: 400;
		margin-top: 20px;
	}

	#modelos p strong{
		font-weight: 500;
	}

	#ubicacion{
		padding-bottom: 40px;
	}

	#sectionmap{
		padding-bottom: 0px;
		background-color: #f8f8f8;
	}

	#sectionmap .row{
		background-color: #f8f8f8;
	}

	#sectionmap .map{
		height: 430px;
	}

	@media (max-width: 767px) { 
		#sectionmap .map{
			height: 330px;
		}
	}

	#cotizacion{
		padding-bottom: 40px;
		padding-top: 50px;
	}


	#cotizacion .cmxform .espacio {
			margin-bottom: 6px;
		}

	#cotizacion .cmxform label.error {
		font-size: .8rem;
		color: #c80085;
		font-weight: 500;
		font-style: italic;
	}

	#cotizacion .btn-success-gradiant {
		background: #a3bd33;
		border-radius: 0;
		font-family: 'Oswald', sans-serif;
		font-size: 1.2rem;
		font-weight: 400;
		border: 0px;
		margin-top: 10px;
	}

	/* Extra Small devices (phones) */
	@media (max-width: 767px) { 
		#cotizacion .sala{
			margin-top: 30px;
		}
	}

	#sectionmap .sala{
		padding-top: 20px;
		padding-bottom: 20px;
	}

	#sectionmap .sala .contiene{
		/*padding: 30px;*/
		width: 80%;
		background-color: #fff;
	}

	@media (max-width: 768px) {
		#sectionmap .sala .contiene{
			margin-left: auto;
			margin-right: auto;
		}
	}

	#sectionmap .sala h2{
		font-size: 1.4rem; 
		font-weight: 300;
	}

	#sectionmap .sala h4{
		font-size: 1.3rem; 
		font-weight: 300;
		color: #73bae7;
	}

	#sectionmap .sala p{
		font-size: 1rem; 
		font-weight: 300;
	}

	#sectionmap .sala p a.link{
		font-size: 1rem; 
		font-weight: 400;
		color:#9cc44c;
	}

	.antialias{
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}



	/* Extra Small devices (phones) */
	@media (max-width: 767px) { 
	
	}

	/* Small devices (tablets, 768px and up) */
	@media (min-width: 768px) {


	}

	/* medium devices (desktop and up) */
	@media (min-width: 992px) {


	}

	@media (min-width: 1200px) {

		
	}

	@media (min-width: 1500px) {

		
	}
	#presenta div.social a.whatsapp {
	    font-size: 1.8rem;
	    color: #A8A8A8;
	    margin-right: 10px;
	}

	.social .fb-share-button span{
		height: 44px !important;
	}

	h1.titulo{
		font-size: 1.3rem;
	}

	h5.h6{
		font-size: .8rem;
		color: #cccccc;
	}

	.describe{
		font-weight: normal;
		font-size: .9rem;
	}
	button.btn svg{
		margin-top: -5px;
	}

	.leaflet-pane,
	.leaflet-control,
	.leaflet-top,
	.leaflet-bottom {
	    z-index: 10 !important;
	}

	#main_header .nombre_proyecto{
		/*background-color: #73bae7;*/
		padding: 6px 20px;
		color: #FFFFFF;
	}	

	#main_header .nav-link.sub {
	    display: block;
	    padding: 1rem 1rem;
	    color:#505c63;
	    font-size: .9rem;
	    border-radius: 0;
	}

	#main_header .nav-pills .nav-link.active,
	#main_header .nav-pills .show > .nav-link {
	    color: #505c63;
	    background-color: #ececec;
	}

	#main_header .nav-link.cotice{
		background-color: #ffde01;
		border: 1px solid #ff9601;
		color: #545454;
		padding: .9rem 1rem;
		box-sizing: border-box;
	}

	#main_header .nav-link.agende{
		background-color: #67c42b;
		color: #FFFFFF;
	}

	.virtuales .cols{
		padding-left: 0;
		padding-right: 0;
		padding-top: 4px;
	}

	.virtuales .cols.text{
		padding-left: 10px;
		padding-right: 10px;
	}

	.virtuales .cols.text h4{
		color: #FFFFFF;
		text-align: right;
		font-weight: 300;
		font-size: 1.3rem;
	}

	.ug-thumb-wrapper.ug-tile.ug-tile-clickable.ug-thumb-ratio-set img{
	opacity: 0.3;
    transition: opacity 1s ease-in-out !important;
    }

	.ug-thumb-wrapper.ug-tile.ug-tile-clickable.ug-thumb-ratio-set.ug-thumb-over img{
		opacity: 1;
	}

	.tab_describe{
		min-height: 350px;
	}

	.btn-bci{
		margin-top: 20px;
		color: #FFFFFF;
		background-color: #37474F;
		padding: 10px 35px;
		font-family: 'Overpass', sans-serif;
		font-weight: 400;
		letter-spacing: -0.03px;
		font-size: 16px;
	}

	.bg {
		display: none;
		position: absolute;
		z-index: 2000;
		background: #1e1e1e;
	}

	.bg.showBci {
		width: 100%;
		height: 100%;
		position: fixed;
		z-index: 2000;
		text-align: center;
		display: flex;
		justify-content: center;
		align-items: center;
		background: rgba(0,0,0,.9);
	}

	#modal-bci {
		opacity: 1;
		padding: 5px 10px; 
		max-width: 500px;
		border-radius: 10px;
		background-color: #fff;
	}

	@media (max-width: 700px) {
	  .btn-bci{
			padding: 10px 0px;
			width: 100%;
			text-align: center;
		}

		#modelos .btn.sub {
		    padding: 14px 0px;
		    width: 100%;
			text-align: center;
		}

		.bg.showBci {
			width: 100%;
			height: 100%;
			position: fixed;
			z-index: 2000;
			overflow-y: scroll;
			text-align: center;
			display: flex;
			padding-top: 5px;
			padding-bottom: 5px;
			justify-content: center;
			align-items: baseline;
			background: rgba(255,255,255,.9);
		}

		#modal-bci {
			opacity: 1;
			padding: 5px 10px; 
			max-width: 500px;
			border-radius: 10px;
			background-color: #fff;
		}
	}

	#loading-gui h1#loading-header {
		display: none;
	}

	.ug-lightbox .ug-textpanel-title, .ug-lightbox .ug-textpanel-description {
	    font-size: 17px !important;
	    font-weight: normal !important;
	    color: #67c42b !important;
	}
</style>
@endsection

@section('header')
<div class="container-fluid d-none d-md-block" style="background-color: #ffffff; border-top: 1px solid #c9c9c9">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <ul id="navbarpro" class="nav nav-pills justify-content-end">
                <li class="nav-item nombre_proyecto">
                    <img src="{{Vite::asset('resources/img/iso_3100.png')}}" class="img-fluid" width="40">
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#banner-pac3100-2">Presentación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#presenta">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#virtual">Pilotos Virtuales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#modelos">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#ubicacion">Ubicación y Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub cotice" href="#cotizacion">Cotiza Aquí !</a>
                </li>
                <li class="nav-item ml-md-2">
                    <a class="nav-link sub agende videollamada" href="#" ><i class="far fa-calendar-alt"></i> Agendar VideoLlamada</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
@parent
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11&appId=523764584639915';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="banner-pac3100-2">
	<div class="container-fluid">
		<div class="">
			<section id="slider-sec" class="slider5">
				<div id="slider5" class="carousel bs-slider slide carousel-fade control-round indicators-line" data-bs-ride="carousel" data-pause="hover" data-interval="7000">					
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active unico">							
							<img src="{{Vite::asset('resources/img/proyectos/pac-3100-1/portada/portada2_proyecto.jpg')}}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{Vite::asset('resources/img/portada2_proyecto3100_xs.jpg')}}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>							
						</div>
						<div class="carousel-item unico">							
							<img src="{{Vite::asset('resources/img/proyectos/pac-3100-1/portada/portada2_proyecto_2.jpg')}}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{Vite::asset('resources/img/portada2_proyecto3100_b_xs.jpg')}}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>							
						</div>													
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#slider5" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#slider5" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>				
			</section>
		</div>
		<div class="row">			
			<div class="col-12 verde"><H3 class="text-center">ETAPA II ENTREGA 1er Trimestre 2023</H3></div>
		</div>
	</div>
</div>

<div id="presenta">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-12">
        		<img src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/logo-pacifico.jpg') }}" width="210" class="img-fluid mb-2 mx-auto d-block d-md-none">
        		<h2 class="mb-4">Información</h2>
        		<div class="descripcion mb-4">
        			<p>Un Condominio a pasos de la playa en donde la arquitectura armoniza amplios jardines y edificios que recogen vistas del paisaje costero. Un Proyecto que incorpora la t&eacute;cnica, energ&iacute;as renovables y reciclaje en amistad con el medio ambiente.</p>

					<p>En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastron&oacute;micas. Es la evoluci&oacute;n de la sala multiuso, que convoca y llama al encuentro.</p>

					<p>Cuenta con dos terrazas emplazadas en el piso 10, un espacio al aire libre con vista panor&aacute;mica al entorno costero.</p>
        		</div>
        	</div>
        	<div class="col-md-6 mt-md-4">
        		<ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true"><span class="">Departamentos</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="">El Condominio</span></a> </li>
                    <li class="nav-item"> <a class="nav-link verde" data-bs-toggle="tab" data-bs-target="#ecology" role="tab" aria-controls="ecology" aria-selected="false"><span class="">Sustentabilidad y Atributos</span></a> </li>                    					
					                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active tab_describe" id="home" role="tabpanel">
                        <div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> 2 y 3 dormitorios <br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Cocina americana amoblada y equipada<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Encimera vitrocerámica, horno y campana<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Dormitorio principal en suite<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Estar comedor, pasillo y dormitorios piso SPC<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Terraza y Baños, piso Porcelanato<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Ventilaciones pasivas<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Walking closet<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Conexión para lavadora<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Estacionamiento y bodega<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Barandas de terrazas de aluminio y vidrio laminado

                            		<!-- <hr> -->
                            		<!-- <b>Precio Desde: UF 2.637.-</b> -->
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tab_describe" id="profile" role="tabpanel">
                    	<div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Dos edificios de 10 pisos<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Acceso controlado<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Sistema de seguridad con cámaras de vigilancia<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> 2.500 m2 de áreas verdes<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Piscina adultos<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Piscina niños<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Dos Quinchos al aire libre en Terraza panorámica<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Un quincho en espacio cerrado en salón Gourmet<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Salón de eventos Gourmet<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Dos salas para teletrabajo <br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Cicloparking<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Lavanderia<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Juegos Infantiles
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tab_describe" id="ecology" role="tabpanel">
                    	<div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<h4 class="mb-3" style="color: #a3bd33;">Comprometidos con el Medioambiente</h4>
                            		<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Planta de generación de energía fotovoltaica, abasteciendo las zonas comunes del condominio<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Eficiencia hídrica; riego eficiente subteráneo para areas verdes además de incorporar hidrogel al sustrato para mantener la humedad<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Grifería eficiente de bajo consumo en baños y cocina<br>
									<img src="{{Vite::asset('resources/img/tick_verde.png')}}" class="img-fluid" width="20"> Recolección de basura diferenciada  y Reciclaje
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
				
                <!-- <a href="/Informativo_p2800.pdf" target="_blank"><img src="/images/avance_obra.jpg" class="img-fluid"></a> -->
        	<div class="col-md-6 mt-md-4">
				<div id="gallery" style="display:none;">
					<img alt="" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/foto_folleto_3100.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/foto_folleto_3100.jpg') }}" alt="foto_folleto_3100">
					<img alt="" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/foto_folleto_3100_2.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/foto_folleto_3100_2.jpg') }}" alt="foto_folleto_3100_2">
					<img alt="" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/foto_folleto_3100_3.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/foto_folleto_3100_3.jpg') }}" alt="foto_folleto_3100_3">
				</div>
        	</div>
        </div>
    </div>
</div>

<section id="virtual">
	<div class="container">
		<div class="row virtuales align-items-center">
	    	<div class="col-md-6 cols">
	    		<iframe id="frameprueba" class="frames" width = "100%" src = " https://my.matterport.com/show/?m=DmtQBSUXc2U" frameborder = "0" allowfullscreen allow = "vr"> </iframe>	    		
	    	</div>
	    	<div class="col-md-6 cols">
	    		<iframe class="frames" width = "100%" src = " https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allow = "vr" class="render"> </iframe>
	    	</div>
	    	<div class="bajo_recor col-md-12 d-flex justify-content-center">
	    		<div class="ver_recor d-flex align-items-center"><p>Ver Recorrido Virtual</p></div>
	    		<div class="verde_360"><img src="{{Vite::asset('resources/img/360n.png')}}" width="86" class="img-fluid"></div>
	    		<div class="ver_recor d-none d-md-flex align-items-center"><p>Ver Recorrido Virtual</p></div>
	    	</div>
	    </div>
	</div>
</section>

<section id="modelos">
	<div class="container">
        <div class="row">
        	<div class="col-12">
        		<ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#mod-a" role="tab" aria-controls="mod-a" aria-selected="true"><span class="">Modelo A</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mod-b" role="tab" aria-controls="mod-b" aria-selected="false"><span class="">Modelo B</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#mod-c" role="tab" aria-controls="mod-c" aria-selected="false"><span class="">Estudio</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active" id="mod-a" role="tabpanel">
                        <div class="p-30 detalles">
                            <div class="row">
                            	                            	<div class="col-md-7">
                            		<p><strong>MODELO A</strong><br />
									2 Dormitorios - 2 Ba&ntilde;os<br />
									Sup. Municipal: 51,65&nbsp;m2<br />
									Sup. Terraza: 4,72&nbsp;m2<br />
									Sup. Total: 56,37&nbsp;m2</p>
                            		<a href="#cotizacion" class="btn btn-info nav-link sub" style="display: inline-block;">COTIZA AQUÍ !</a>
                            		<button  class="btn btn-info sub ml-md-2 videollamada"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</button>                            		
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="mod-b" role="tabpanel">
                    	<div class="p-30 detalles">
                            <div class="row">
								<div class="col-md-7">
                            		<p><strong>MODELO B</strong><br />
									3 Dormitorios - 2 Ba&ntilde;os<br />
									Sup. Municipal: 59,84&nbsp;m2<br />
									Sup. Terraza: 4,70&nbsp;m2<br />
									Sup. Total: 64,54 m2</p>
                            		<a href="#cotizacion" class="btn btn-info nav-link sub" style="display: inline-block;">COTIZA AQUÍ !</a>
                            		<button  class="btn btn-info sub ml-md-2 videollamada"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</button>                            		
                            	</div>
                            </div>
                        </div>
                    </div>
	                <div class="tab-pane" id="mod-c" role="tabpanel">
	                    	<div class="p-30 detalles">
	                            <div class="row">
									<div class="col-md-7">
	                            		<p><strong>ESTUDIO</strong><br />
										2 Dormitorios - 2 Ba&ntilde;os<br />
										Sup. Municipal: 51,65&nbsp;m2<br />
										Sup. Terraza: 4,72&nbsp;m2<br />
										Sup. Total: 56,37&nbsp;m2</p>
	                            		<a href="#cotizacion" class="btn btn-info nav-link sub" style="display: inline-block;">COTIZA AQUÍ !</a>
	                            		<button  class="btn btn-info sub ml-md-2 videollamada"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</button>
	                            	</div>
	                            </div>
	                        </div>
	                    </div>
                	</div>                              
				</div>
        </div>
    </div>
</section>

<section id="ubicacion">	
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="ratio ratio-4x3" data-aos="fade-up">
				  	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Du3LqHl2k?autoplay=0&rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-7 pl-md-0 pt-md-4">
				<div id="entorno" style="display:none;">
					<img data-title="Piscinas Adultos de 88,64 m2 y Niños de 24,3m2      (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/01.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/01.jpg') }}" alt="Piscinas Adultos de 88,64 m2 y Niños de 24,3m2      (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="Caminos peatonales surgen como formas sobre un fondo verde originado en la vegetación dentro de un espacio protagonizado por lo natural del jardín     (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/04 Vista P3100-A_Grande.png') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/04 Vista P3100-A_Grande.png') }}" alt="Caminos peatonales surgen como formas sobre un fondo verde originado en la vegetación dentro de un espacio protagonizado por lo natural del jardín     (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/08 Vista P3100_Grande.png') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/08 Vista P3100_Grande.png') }}" alt="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="2 Quinchos en Terraza panorámica en piso 10    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/05.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/05.jpg') }}" alt="2 Quinchos en Terraza panorámica en piso 10    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastronómicas. Es la evolución de la sala multiuso, que convoca y llama al encuentro.        (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/06 Vista P3100_Grande.png') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/06 Vista P3100_Grande.png') }}" alt="En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastronómicas. Es la evolución de la sala multiuso, que convoca y llama al encuentro.        (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/03.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/03.jpg') }}" alt="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="Contiene dos salas de multipropósito de recreación y actividades productivas como teletrabajo en un ambiente relajado.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/04.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/04.jpg') }}" alt="Contiene dos salas de multipropósito de recreación y actividades productivas como teletrabajo en un ambiente relajado.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="Como parte del aporte ecológico, Planta de generación fotovoltaica, para alimentar zonas comunes y pasillos de los edificios       (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/02.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/02.jpg') }}" alt="Como parte del aporte ecológico, Planta de generación fotovoltaica, para alimentar zonas comunes y pasillos de los edificios       (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
					<img data-title="Emplazamiento del Proyecto" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/EMPLAZAMIENTO VENTAS_Grande.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/EMPLAZAMIENTO VENTAS_Grande.jpg') }}" alt="Emplazamiento del Proyecto">
					<img data-title="Entorno costero, a una cuadra de la Avenida del Mar y la Playa" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/06.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/06.jpg') }}" alt="Entorno costero, a una cuadra de la Avenida del Mar y la Playa">
					<img data-title="Avenida del Mar" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/_DSC0169_Grande.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/_DSC0169_Grande.jpg') }}" alt="Avenida del Mar">
					<img data-title="Faro Monumental de La Serena" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/_DSC0163_Grande.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/_DSC0163_Grande.jpg') }}" alt="Faro Monumental de La Serena">
					<img data-title="Playas de La Serena" src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/_DSC0121_Grande.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/_DSC0121_Grande.jpg') }}" alt="Playas de La Serena">
					<img data-title="Negocios de gastronomía de la Avenida del Mar muy cercanos al condominio." src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/_DSC0094_Grande.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/_DSC0094_Grande.jpg') }}" alt="Negocios de gastronomía de la Avenida del Mar muy cercanos al condominio.">
					<img data-title="Paseos de la Avenida del Mar, negocios y bicisenda." src="{{ Vite::asset('resources/img/proyectos/pac-3100-1/thumbnail/07.jpg') }}" data-image="{{ Vite::asset('resources/img/proyectos/pac-3100-1/07.jpg') }}" alt="Paseos de la Avenida del Mar, negocios y bicisenda.">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="sectionmap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div id="map" class="map" style="width:100%;">
                    <img src="{{Vite::asset('resources/img/loading.gif')}}">
                </div>
			</div>
			<div class="col-md-4 sala">
				<div class="contiene p-3">
					<h2 class="mb-md-2">Sala de Ventas</h2>
					<h4>Ubicación:</h4>
					<p>Avda. Pacífico #3100 - La Serena &nbsp;&nbsp;<a target="_blank" href="https://waze.com/ul?ll=-29.922094110417884,-71.27509598457016&amp;navigate=yes" class="btn btn-outline-info btn-sm"><i class="fas fa-map-marked-alt"></i> Ir Waze</a></p>
					
					<h4>Teléfono:</h4>
					<p><a class="link" href="tel://+56979442005" target="_blank">+56 9 79442005</a></p>
					<h4>Email:</h4>
					<p><a class="link" href="mailto:contactoventas@icpacifico.cl">contactoventas@icpacifico.cl</a></p>
					<h4>Horario Atención:</h4>
					<p>Lunes a Viernes de 09:00 a 18:30.</p>
					<p>Sábado y Domingo de 11:00 a 14:00 y de 15:00 a 18:30.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="cotizacion">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-7">
				<h2>Cotización</h2>
				<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1473626&conversionId=1469745&fmt=gif" />
				<div class="form pt-md-3">
	        		<form class="cmxform row" id="commentForm" action="{{ route('cotizacion.pacifico') }}" method="POST" >
						@csrf
	    				<input id="proyectoid" type="hidden" name="proyectoid" value="5">
	    				<div class="col-12 col-md-6 espacio" ><input id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre"></div>

	    				<div class="col-12 col-md-6 espacio"><input id="rut" type="text" name="rut" class="form-control rut" placeholder="Rut"></div>

	    				<div class="col-12 col-md-6 espacio"><input id="mail" type="email" name="mail" class="form-control" placeholder="E-mail"></div>

	    				<div class="col-12 col-md-6 espacio"><input id="fonocon" type="text" name="fonocon" class="form-control numero" placeholder="Teléfono"></div>

	    				<div class="col-12 col-md-6 espacio"><input id="direccion" type="text" name="direccion" class="form-control" placeholder="Direccion"></div>

	    				<div class="col-12 col-md-6 espacio"><input id="ciudad" type="text" name="ciudad" class="form-control" placeholder="Ciudad"></div>

	    				<div class="col-12 col-md-6 espacio">
	    					<select name="modelo" id="modelo" class="form-control">
	    						<option value="" selected>Modelo de Departamento</option>
	    						<option value="A">Modelo A 2 dorm. 2 baños</option>
	    						<option value="ESTUDIO">Modelo ESTUDIO 2 dorm. 2 baños</option>
	    						<option value="B">Modelo B 3 dorm. 2 baños</option>
	    					</select>
	    				</div>

	    				<div class="col-12 col-md-6 espacio">
	    					<select name="medio" id="medio" class="form-control">
	    						<option value="" selected>Cómo llegó a nosotros</option>
	    						<option value="Diario el Día">Diario el Día</option>
	    						<option value="Radio">Radio</option>
	    						<option value="Facebook">Facebook</option>
	    						<option value="Expo. Inmobiliaria">Expo. Inmobiliaria</option>
	    						<option value="Recomendación">Recomendación</option>
	    						<option value="Buscador Web">Buscador Web</option>
	    						<option value="Letrero">Letrero</option>
	    					</select>
	    				</div>
	    				<div class="col-md-12 espacio"><textarea id="comentarios" rows="10" name="comentarios" class="form-control" placeholder="Comentario"></textarea></div>
	        			<div class="col-12 text-center" id="contenedor-boton">
	        				<button type="submit" onclick="onPixel()" class="btn btn-success-gradiant btn-md btn-arrow"><span>Enviar <i class="ti-arrow-right"></i></span></button>
	        				<!-- <input class="btn btn-default" type="submit" value="Enviar" name="button" id="button"/> -->
	        			</div>
	        		</form>
	        	</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/js/unitegallery.min.js" integrity="sha512-q0Tx9njjBh0TfH3nPC2HfQbLXRyq27yx22U9zdj7nwH97SfIbnvAwTqpjwowq2dDZBe2k84sx/GdEZwzHsDqUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/slider/ug-theme-slider.min.js" integrity="sha512-wJ77CqWvHxl0VZkkTXIlwy931rh4p7CnmdvYEz1XZJHAfl4xhktuokGnk+2rUgoMKRjyywx0tbPMyoxVz99LAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/tiles/ug-theme-tiles.min.js" integrity="sha512-tpaozUhiemCplwPy+SorWM3CcHW5HF2dGoqdFEm49MOnui4tzhjwIAV05dMUVHNRbSURl+R3sOSLfOfNFYwrjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript"> 	

    jQuery(document).ready(function(){    	
    	$(document).on("click", ".click_caja", function() {
	    	$("div.click_caja").addClass("oculta");
	    });


		$('a.nav-link.sub').click(function() {
            // alert("aaaa");
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-150
                    }, 1000);
                    return false;
                }
            }
        });

    	// galeria proyecto
        jQuery("#gallery").unitegallery({
	        gallery_theme: "slider",
	        gallery_play_interval: 3000,
	        gallery_width:900,							//gallery width		
			gallery_height:650,	
	        slider_enable_bullets: false,
	        slider_enable_fullscreen_button: true,
	        slider_enable_text_panel: false
	        // slider_textpanel_title_font_size: 12,
	        // slider_textpanel_title_bold:false	        
	    });
	    // $("#gallery").css({"height":"auto"});
	    // setTimeout(function(){
    	// 	$('.ug-tiles-preloader').css( "opacity", "0" );
    	// }, 100);


    	jQuery("#entorno").unitegallery({
			gallery_theme: "tiles",
			// gallery_background_color: "#FFFFFF",
			tiles_type: "justified",
			tile_enable_image_effect:false,
			// tile_image_effect_type: "sepia",
			tile_enable_overlay:false,
			tile_enable_icons:false,
			tile_enable_textpanel: true,
			tile_textpanel_title_font_size: 11,
			tiles_nested_optimal_tile_width: 150,	// tiles optimal width
			tiles_justified_row_height: 100,
			tiles_min_columns: 4,					//min columns - for mobile size, for 1 column, type 1
			tiles_max_columns: 5,
			tiles_col_width: 220,
			tiles_space_between_cols: 2,
			lightbox_textpanel_padding_top:10,					//textpanel padding top 
			lightbox_textpanel_padding_bottom:15,
			lightbox_textpanel_title_font_size: 13,
		});
		$("#entorno").css({"height":"auto"});

    	var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			// osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
			osmAttrib = '',
			osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
		var map = L.map('map').setView([-29.922094110417884, -71.27509598457016], 17).addLayer(osm);
		var greenIcon = L.icon({
		    iconUrl: "{{Vite::asset('resources/img/marker-3100.png')}}",		
		    iconSize:     [50, 61], // size of the icon		  
		    iconAnchor:   [20, 60], // point of the icon which will correspond to marker's location
		    shadowAnchor: [4, 62],  // the same for the shadow
		    popupAnchor:  [0, -56] // point from which the popup should open relative to the iconAnchor
		});

		var marker = new L.marker([-29.922094110417884, -71.27509598457016], {icon: greenIcon})
		.addTo(map)
		.bindPopup('<img src="{{Vite::asset("resources/img/proyectos/pac-3100-1/portada/portada2_proyecto.jpg")}}" width="160"><br>'+'<span>Avda. Pacífico 3100</span><br><br><a target="_blank" href="https://waze.com/ul?ll=-29.922094110417884,-71.27509598457016&amp;navigate=yes" class="btn btn-outline-info btn-sm"><i class="fas fa-map-marked-alt"></i> Ir Waze</a>');

	    function resultado(data){
	    	toastr.options = {
	    		"closeButton": false,
	    		"debug": false,
	    		"newestOnTop": false,
	    		"progressBar": false,
	    		"positionClass": "toast-top-full-width",
	    		"preventDuplicates": false,
	    		"onclick": function () { 
	    			if (data.alerta==="success") {
	    				window.location='/gracias'; 
	    			} else {
	    				$('#contenedor-boton').html('<button type="submit" class="btn btn-success-gradiant btn-md btn-arrow"><span>Enviar <i class="ti-arrow-right"></i></span></button>');
	    			}
	    		},
	    		"onHidden": function () { 
	    			if (data.alerta==="success") {
	    				window.location='/gracias'; 
	    			} else {
	    				$('#contenedor-boton').html('<button type="submit" class="btn btn-success-gradiant btn-md btn-arrow"><span>Enviar <i class="ti-arrow-right"></i></span></button>');
	    			}
	    		},
	    		"showDuration": "2000",
	    		"hideDuration": "500",
	    		"timeOut": "2000",
	    		"extendedTimeOut": "1000",
	    		"showEasing": "swing",
	    		"hideEasing": "linear",
	    		"showMethod": "fadeIn",
	    		"hideMethod": "fadeOut"
	    	}		   
		    Command: toastr[data.alerta](data.msj, data.titulo)

		};

		setTimeout(
		  function() 
		  {
		    $( ".unico" ).addClass( "fademio" );
		    // alert("hola");
		  }, 50);

		$(".carousel").swipe({
	      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
	        if (direction == 'left') $(this).carousel('next');
	        if (direction == 'right') $(this).carousel('prev');
	      },
	      allowPageScroll:"vertical"
	    });    	    
    });
$(function () {
$('.social a').on('click', function (e) {
	e.preventDefault();
	window.open($(this).attr('href'), 'shareWindow', 'height=450, width=600, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 300) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
  });
});
</script>
@include('sweetalert::alert')
@endsection
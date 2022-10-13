@extends('sitioweb.app')

@section('style')
<style>
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

	/*#main_header .nombre_proyecto h2{
		font-size: 1.1rem;
		margin-top: 5px;
		line-height: 1rem;
		margin-bottom: 0;
		font-weight: normal;
		color: #FFFFFF;
	}

	#main_header .nombre_proyecto h6{
		font-size: .75rem;
		margin-top: 0;
		font-weight: normal;
		margin-bottom: 0;
		color: #FFFFFF;
	}*/

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
                    <img src="https://icpacifico.cl/images/iso_3100.png" class="img-fluid" width="40">
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#banner-top">Presentación</a>
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
                    <a class="nav-link sub agende" href="#" onclick="agendarVideoLlamada()"><i class="far fa-calendar-alt"></i> Agendar VideoLlamada</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
@parent
<div id="banner-top">
	<div class="container-fluid">
		<div class="">
    <section id="slider-sec" class="slider5">
        <div id="slider5" class="carousel bs-slider slide carousel-fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="7000">
            <ol class="carousel-indicators">
            	<li data-target="#slider5" data-slide-to="0" class="active"></li>
            	<li data-target="#slider5" data-slide-to="1"></li>
            	<!-- <li data-target="#slider5" data-slide-to="2"></li> -->
            </ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
            	<div class="carousel-item active unico">
                    <!-- Slide Background -->
                    <img src="https://icpacifico.cl/archivo/proyecto/portada2/3/portada2_proyecto.jpg" alt="ICpacifico" class="slide-image d-none d-md-block" />
                    <img src="https://icpacifico.cl/images/portada2_proyecto3100_xs.jpg" alt="ICpacifico" class="slide-image d-block d-md-none" />
                    <div class="bs-slider-overlay d-none d-md-block"></div>
                    <!-- Slide Text Layer -->
                   <!--  <div class="slide-text row justify-content-center">
                        <div class="col-md-9 col-lg-6 bg_texto">

                            <h2 class="title mb-md-0 animatitulo"></h2>
                        </div>
                    </div> -->
                </div>
                <div class="carousel-item unico">
                    <!-- Slide Background -->
                    <img src="https://icpacifico.cl/archivo/proyecto/portada2/3/portada2_proyecto_2.jpg" alt="ICpacifico" class="slide-image d-none d-md-block" />
                    <img src="https://icpacifico.cl/images/portada2_proyecto3100_b_xs.jpg" alt="ICpacifico" class="slide-image d-block d-md-none" />
                    <div class="bs-slider-overlay d-none d-md-block"></div>
                    <!-- Slide Text Layer -->
                   <!--  <div class="slide-text row justify-content-center">
                        <div class="col-md-9 col-lg-6 bg_texto">

                            <h2 class="title mb-md-0 animatitulo"></h2>
                        </div>
                    </div> -->
                </div>

                <div class="slider-control d-none d-md-block">
                    <!-- Left Control -->
                    <a class="left carousel-control-prev text-white font-14" href="#slider5" role="button" data-slide="prev"> <span class="ti-arrow-left" aria-hidden="true"></span> <b class="sr-only font-normal">Previous</b> </a>
                    <!-- Right Control -->
                    <a class="right carousel-control-next text-white font-14" href="#slider5" role="button" data-slide="next"> <span class="ti-arrow-right" aria-hidden="true"></span> <b class="sr-only font-normal">Next</b> </a>
                </div>
                <!-- End of Slider Control -->
            </div>
        </div>
        <!-- End Slider -->
    </section>
</div>
		<div class="row">
			<!-- <div class="col-12 px-0 px-md-2">
				<img src="/archivo/proyecto/portada2//" class="img-fluid d-none d-md-block">
				<img src="/images/portada2_proyecto_xs.jpg" class="img-fluid d-block d-md-none">
			</div> -->
						<div class="col-12 verde"><H3 class="text-center">ETAPA II ENTREGA 1er Trimestre 2023</H3></div>
					</div>
	</div>
</div>

<div id="presenta">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-12">
        		<img src="https://icpacifico.cl/archivo/proyecto/logo/5/logo-pacifico.jpg" width="210" class="img-fluid mb-2 mx-auto d-block d-md-none">
        		<h2 class="mb-4">Información</h2>
        		<div class="descripcion mb-4">
        			<p>Un Condominio a pasos de la playa en donde la arquitectura armoniza amplios jardines y edificios que recogen vistas del paisaje costero. Un Proyecto que incorpora la t&eacute;cnica, energ&iacute;as renovables y reciclaje en amistad con el medio ambiente.</p>

<p>En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastron&oacute;micas. Es la evoluci&oacute;n de la sala multiuso, que convoca y llama al encuentro.</p>

<p>Cuenta con dos terrazas emplazadas en el piso 10, un espacio al aire libre con vista panor&aacute;mica al entorno costero.</p>
        		</div>
        	</div>
        	<div class="col-md-6 mt-md-4">
        		<ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="">Departamentos</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="">El Condominio</span></a> </li>
                    <li class="nav-item"> <a class="nav-link verde" data-toggle="tab" href="#ecology" role="tab"><span class="">Sustentabilidad</span></a> </li>
                    					<!-- <li class="nav-item"> <a class="nav-link" href="/Folleto_P2800_EtapaII_VB.pdf" target="_blank" role="button"><span class=""><i class="fas fa-file-pdf" style="color: #FF001C"></i> Folleto PDF</span></a> </li> -->
					                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active tab_describe" id="home" role="tabpanel">
                        <div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> 2 y 3 dormitorios <br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Cocina americana amoblada y equipada<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Encimera vitrocerámica, horno y campana<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Dormitorio principal en suite<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Estar comedor, pasillo y dormitorios piso SPC<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Terraza y Baños, piso Porcelanato<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Ventilaciones pasivas<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Walking closet<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Conexión para lavadora<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Estacionamiento y bodega<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Barandas de terrazas de aluminio y vidrio laminado

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
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Dos edificios de 10 pisos<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Acceso controlado<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Sistema de seguridad con cámaras de vigilancia<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> 2.500 m2 de áreas verdes<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Piscina adultos<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Piscina niños<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Dos Quinchos al aire libre en Terraza panorámica<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Un quincho en espacio cerrado en salón Gourmet<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Salón de eventos Gourmet<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Dos salas para teletrabajo <br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Cicloparking<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Lavanderia<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Juegos Infantiles
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tab_describe" id="ecology" role="tabpanel">
                    	<div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<h4 class="mb-3" style="color: #a3bd33;">Comprometidos con el Medioambiente</h4>
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Planta de generación de energía fotovoltaica, abasteciendo las zonas comunes del condominio<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Eficiencia hídrica; riego eficiente subteráneo para areas verdes además de incorporar hidrogel al sustrato para mantener la humedad<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Grifería eficiente de bajo consumo en baños y cocina<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Recolección de basura diferenciada  y Reciclaje
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
				
                <!-- <a href="/Informativo_p2800.pdf" target="_blank"><img src="/images/avance_obra.jpg" class="img-fluid"></a> -->
        	<div class="col-md-6 mt-md-4">
				<div id="gallery" style="display:none;">
                                                    <img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/7/thumbnail/foto_folleto_3100.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/7/foto_folleto_3100.jpg" alt="foto_folleto_3100.jpg">
                                                                <img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/7/thumbnail/foto_folleto_3100_2.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/7/foto_folleto_3100_2.jpg" alt="foto_folleto_3100_2.jpg">
                                                                <img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/7/thumbnail/foto_folleto_3100_3.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/7/foto_folleto_3100_3.jpg" alt="foto_folleto_3100_3.jpg">
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
	    		<div class="flotante_virtual d-none d-md-flex align-items-center click_caja"><p>Visita nuestros pilotos virtuales desde cualquier parte del mundo</p></div>
	    	</div>
	    	<div class="col-md-6 cols">
	    		<iframe class="frames" width = "100%" src = " https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allow = "vr" class="render"> </iframe>
	    	</div>
	    	<div class="bajo_recor col-md-12 d-flex justify-content-center">
	    		<div class="ver_recor d-flex align-items-center"><p>Ver Recorrido Virtual</p></div>
	    		<div class="verde_360"><img src="https://icpacifico.cl/images/360n.png" width="86" class="img-fluid"></div>
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
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#mod-a" role="tab"><span class="">Modelo A</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mod-b" role="tab"><span class="">Modelo B</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mod-c" role="tab"><span class="">Estudio</span></a> </li>
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
                            		<div onclick="agendarVideoLlamada()" class="btn btn-info sub ml-md-2"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</div>
                            		<!-- <div onclick="simularCredito()" class="btn btn-bci ml-md-2">OBTÉN TU APROBACIÓN EN LÍNEA</div> -->
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
                            		<div onclick="agendarVideoLlamada()" class="btn btn-info sub ml-md-2"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</div>
                            		<!-- <div onclick="simularCredito()" class="btn btn-bci ml-md-2">OBTÉN TU APROBACIÓN EN LÍNEA</div> -->
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
	                            		<div onclick="agendarVideoLlamada()" class="btn btn-info sub ml-md-2"><i class="far fa-calendar-alt"></i> AGENDAR VIDEOLLAMADA</div>
	                            		<!-- <div onclick="simularCredito()" class="btn btn-bci ml-md-2">OBTÉN TU APROBACIÓN EN LÍNEA</div> -->
	                            	</div>
	                            </div>
	                        </div>
	                    </div>
                </div>
                                <!-- <a class="nav-link sub" href="#cotizacion"><img src="/images/banner_cam_06.jpg" class="img-fluid mt-md-5"></a> -->
                        	</div>
        </div>
    </div>
</section>

<section id="ubicacion">
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>Ubicación y Entorno</h2>
			</div>
		</div>
	</div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="embed-responsive embed-responsive-4by3" data-aos="fade-up">
				  	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Du3LqHl2k?autoplay=0&rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-7 pl-md-0 pt-md-4">
				<div id="entorno" style="display:none;">
                                                <img data-title="Piscinas Adultos de 88,64 m2 y Niños de 24,3m2      (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/01.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/01.jpg" alt="Piscinas Adultos de 88,64 m2 y Niños de 24,3m2      (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="Caminos peatonales surgen como formas sobre un fondo verde originado en la vegetación dentro de un espacio protagonizado por lo natural del jardín     (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/04 Vista P3100-A_Grande.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/04 Vista P3100-A_Grande.png" alt="Caminos peatonales surgen como formas sobre un fondo verde originado en la vegetación dentro de un espacio protagonizado por lo natural del jardín     (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/08 Vista P3100_Grande.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/08 Vista P3100_Grande.png" alt="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="2 Quinchos en Terraza panorámica en piso 10    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/05.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/05.jpg" alt="2 Quinchos en Terraza panorámica en piso 10    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastronómicas. Es la evolución de la sala multiuso, que convoca y llama al encuentro.        (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/06 Vista P3100_Grande.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/06 Vista P3100_Grande.png" alt="En el centro de los amplios jardines se soterra un espacio relevante del Condominio, que acoge actividades sociales y gastronómicas. Es la evolución de la sala multiuso, que convoca y llama al encuentro.        (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/03.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/03.jpg" alt="La terraza es un espacio al aire libre con vista panorámica al entorno costero.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="Contiene dos salas de multipropósito de recreación y actividades productivas como teletrabajo en un ambiente relajado.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/04.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/04.jpg" alt="Contiene dos salas de multipropósito de recreación y actividades productivas como teletrabajo en un ambiente relajado.    (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="Como parte del aporte ecológico, Planta de generación fotovoltaica, para alimentar zonas comunes y pasillos de los edificios       (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/02.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/02.jpg" alt="Como parte del aporte ecológico, Planta de generación fotovoltaica, para alimentar zonas comunes y pasillos de los edificios       (La imágenes contenidas en esta gráficas son meramente ilustrativas, entre ellas se consideran fotografías reales, cómo también imágenes 3D que incluyen montajes fotográficos)">
                                                        <img data-title="Emplazamiento del Proyecto" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/EMPLAZAMIENTO VENTAS_Grande.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/EMPLAZAMIENTO VENTAS_Grande.jpg" alt="Emplazamiento del Proyecto">
                                                        <img data-title="Entorno costero, a una cuadra de la Avenida del Mar y la Playa" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/06.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/06.jpg" alt="Entorno costero, a una cuadra de la Avenida del Mar y la Playa">
                                                        <img data-title="Avenida del Mar" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/_DSC0169_Grande.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/_DSC0169_Grande.jpg" alt="Avenida del Mar">
                                                        <img data-title="Faro Monumental de La Serena" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/_DSC0163_Grande.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/_DSC0163_Grande.jpg" alt="Faro Monumental de La Serena">
                                                        <img data-title="Playas de La Serena" src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/_DSC0121_Grande.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/_DSC0121_Grande.jpg" alt="Playas de La Serena">
                                                        <img data-title="Negocios de gastronomía de la Avenida del Mar muy cercanos al condominio." src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/_DSC0094_Grande.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/_DSC0094_Grande.jpg" alt="Negocios de gastronomía de la Avenida del Mar muy cercanos al condominio.">
                                                        <img data-title="Paseos de la Avenida del Mar, negocios y bicisenda." src="https://icpacifico.cl/archivo/galeria/galeria/8/thumbnail/07.jpg" data-image="https://icpacifico.cl/archivo/galeria/galeria/8/07.jpg" alt="Paseos de la Avenida del Mar, negocios y bicisenda.">
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
                    <img src="../../assets/img/loading.gif">
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
	        		<form class="cmxform row" id="commentForm" method="post" action="https://icpacifico.cl/graba_cotizacion.php" >
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
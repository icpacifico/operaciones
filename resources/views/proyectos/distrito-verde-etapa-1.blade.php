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

		#div-desktop {   display: none;  }
		#div-mapa {	width: 100%;}
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
            	<!-- <li data-target="#slider5" data-slide-to="1"></li>
            	<li data-target="#slider5" data-slide-to="2"></li> -->
            </ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
            	<div class="carousel-item active unico">
                    <!-- Slide Background -->
                    <img style="" src="https://icpacifico.cl/archivo/proyecto/portada2/7/bdistrito.png" alt="ICpacifico" class="slide-image d-none d-md-block" />
                    <img style="height: 100%;" src="https://icpacifico.cl/images/portada2_proyectodv_xs.jpg" alt="ICpacifico" class="slide-image d-block d-md-none" />                                
                    
                        
                    
                    <div class="bs-slider-overlay d-none d-md-block"></div>                    
                </div>                
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
					</div>
	</div>
</div>

<div id="presenta">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-12">
        		<img src="https://icpacifico.cl/archivo/proyecto/logo/7/Logotipo_DistritoVerde_ALTA (1).jpg" width="210" class="img-fluid mb-2 mx-auto d-block d-md-none">
        		<h2 class="mb-4">Información</h2>
        		<div class="descripcion mb-4">
        			<p>Condominio Distrito Verde te entrega una excelente ubicaci&oacute;n. Emplazado en el coraz&oacute;n del Barrio Universitario, a minutos de la Avenida del Mar y Ruta 5; solo a pasos de los centros comerciales Mall Plaza y Puertas del Mar.</p>

<p>Se emplaza en 20.000 m2 de los cuales 11.500 se destinan a bellos jardines, que te invitan a conectar con la naturaleza y el deporte. Conscientes con el medio ambiente, podr&aacute;s reciclar, economizar recursos h&iacute;dricos y energ&iacute;a.</p>
        		</div>
        	</div>
        	<div class="col-md-6 mt-md-4">
        		<ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="">Departamentos</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="">El Condominio</span></a> </li>
                    <li class="nav-item"> <a class="nav-link verde" data-toggle="tab" href="#ecology" role="tab"><span class="">Sustentabilidad y Atributos</span></a> </li>
                                    </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active tab_describe" id="home" role="tabpanel">
                        <div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> 1 y 2 dormitorios <br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Cocina americana amoblada y equipada con encimeras, horno y campana<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Conexión para lavadora<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Piso vinílico<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Estacionamiento y bodega

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
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> 8 edificios <br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Un ascensor por edificio<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Acceso controlado las 24 horas<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Sistema de seguridad con cámaras de vigilancia<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Piscina adultos<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Piscina niños<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Juegos Infantiles<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> 2 salones de uso múltiple y coworking<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Lavanderia<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Cicloparking<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Motoparking<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Zona de quinchos
									
									
									
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tab_describe" id="ecology" role="tabpanel">
                    	<div class="p-30 detalles">
                            <div class="row">
                            	<div class="col-sm-12">
                            		<!--<h4 class="mb-3" style="color: #a3bd33;">Atributos</h4>-->
                            		<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Circuito de Pump Track<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Sector para yoga y calistenia<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Circuito de trote con variaciones<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Punto limpio<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Generación EERR alimentando zonas comunes<br>
									<img src="https://icpacifico.cl/images/tick_verde.png" class="img-fluid" width="20"> Eficiencia hídrica
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
				
                <!-- <a href="/Informativo_p2800.pdf" target="_blank"><img src="/images/avance_obra.jpg" class="img-fluid"></a> -->
        	<div class="col-md-6 mt-md-4">
				<div id="gallery" style="display:none;">
					<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Circuito Pump Track.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Circuito Pump Track.png" alt="Circuito Pump Track.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Sector piscina.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Sector piscina.png" alt="Sector piscina.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Sector practica yoga.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Sector practica yoga.png" alt="Sector practica yoga.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Zona de Quinchos.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Zona de Quinchos.png" alt="Zona de Quinchos.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Acceso -.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Acceso -.png" alt="Acceso -.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Emplazamiento.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Emplazamiento.png" alt="Emplazamiento.png">
								<img alt="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Acceso.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Acceso.png" alt="Acceso.png">
				</div>
        	</div>
        </div>
    </div>
</div>

<section id="virtual" style="margin-top:100px">
	<div class="container">
		<div class="row virtuales align-items-center">
	    	<div class="col-md-6 cols">
	    		<!--<iframe id="frameprueba" class="frames" width = "100%" src = " https://my.matterport.com/show/?m=DmtQBSUXc2U" frameborder = "0" allowfullscreen allow = "vr"> </iframe>-->
	    		<div class="flotante_virtual d-none d-md-flex align-items-center click_caja"><p>¡PRÓXIMAMENTE! Visita nuestros pilotos virtuales desde cualquier parte del mundo</p></div>
	    	</div>
	    	<div class="col-md-6 cols">
	    		<!--<iframe class="frames" width = "100%" src = " https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allow = "vr" class="render"> </iframe>-->
	    	</div>
	    	<div class="bajo_recor col-md-12 d-flex justify-content-center">
	    		<div class="ver_recor d-flex align-items-center"><p></p></div>
	    		<div class="verde_360"><img src="https://icpacifico.cl/images/360n.png" width="86" class="img-fluid"></div>
	    		<div class="ver_recor d-none d-md-flex align-items-center"><p></p></div>
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
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mod-c" role="tab"><span class="">Modelo C</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active" id="mod-a" role="tabpanel">
                        <div class="p-30 detalles">
                            <div class="row">
                            			                                    <div class="col-md-5">
		                                    	<div class="text-center">
			                                    <a data-fancybox="group" data-caption="<b>Planta</b><br />Modelo A" href="https://icpacifico.cl/archivo/modelo/planta/11/Orig Brouchure_DV A.jpg"><img src="https://icpacifico.cl/archivo/modelo/planta/11/thumbnail/Orig Brouchure_DV A.jpg" class="img-fluid"></a>
			                                    </div>
		                                    </div>
		                                                                	<div class="col-md-7">
                            		<p><strong>MODELO A</strong><br />
									2 Dormitorios - 2 Ba&ntilde;os<br />
									Sup. Municipal: 50,91&nbsp;m2<br />
									Sup. Terraza: 9,61&nbsp;m2<br />
									Sup. Total: 60,52&nbsp;m2</p>
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
                            			                                    <div class="col-md-5">
		                                    	<div class="text-center">
			                                    <a data-fancybox="group" data-caption="<b>Planta</b><br />Modelo B" href="https://icpacifico.cl/archivo/modelo/planta/12/Orig Brouchure_DV B.jpg"><img src="https://icpacifico.cl/archivo/modelo/planta/12/thumbnail/Orig Brouchure_DV B.jpg" class="img-fluid"></a>
			                                    </div>
		                                    </div>
		                                                                	<div class="col-md-7">
                            		<p><strong>MODELO B</strong><br />
										2 Dormitorios - 1&nbsp;Ba&ntilde;o<br />
										Sup. Municipal: 46,19&nbsp;m2<br />
										Sup. Terraza: 4,95&nbsp;m2<br />
										Sup. Total: 51,14&nbsp;m2</p>
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
	                            				                                    <div class="col-md-5">
			                                    	<div class="text-center">
				                                    <a data-fancybox="group" data-caption="<b>Planta</b><br />Modelo C" href="https://icpacifico.cl/archivo/modelo/planta/13/Orig Brouchure_DV C.jpg"><img src="https://icpacifico.cl/archivo/modelo/planta/13/thumbnail/Orig Brouchure_DV C.jpg" class="img-fluid"></a>
				                                    </div>
			                                    </div>
			                                    	                            	<div class="col-md-7">
	                            		<p><strong>MODELO A</strong><br />
											1 Dormitorio&nbsp;- 1&nbsp;Ba&ntilde;o<br />
											Sup. Municipal: 29,84&nbsp;m2<br />
											Sup. Terraza: 7,63&nbsp;m2<br />
											Sup. Total: 37,47&nbsp;m2</p>
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
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="embed-responsive embed-responsive-4by3" data-aos="fade-up">
				  	<div style="background-color: #a3bd33;color: #FFFFFF; text-align:center;margin-top: -250px;"><p>¡Pronto! Video de Proyecto </p></div>
				  	<!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Du3LqHl2k?autoplay=0&rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
				</div>
			</div>
			<div class="col-md-7 pl-md-0 pt-md-4">
				<div id="entorno" style="display:none;">
					<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Circuito Pump Track.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Circuito Pump Track.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Sector piscina.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Sector piscina.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Sector practica yoga.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Sector practica yoga.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Zona de Quinchos.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Zona de Quinchos.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Acceso -.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Acceso -.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Emplazamiento.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Emplazamiento.png" alt="">
							<img data-title="" src="https://icpacifico.cl/archivo/galeria/galeria/9/thumbnail/Acceso.png" data-image="https://icpacifico.cl/archivo/galeria/galeria/9/Acceso.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="sectionmap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="map">
					<img  id="map" src="https://icpacifico.cl/images/MapaDV.png">
                   
                </div>
			</div>
			<div class="col-md-4 sala">
				<div class="contiene p-3">
					<h2 class="mb-md-2">Sala de Ventas</h2>
					<h4>Ubicación:</h4>
					<p>Emilio Apey #405 - La Serena &nbsp;&nbsp;

						<!--<a target="_blank" href="https://waze.com/ul?ll=-29.90714907906146,-71.26393357313296&amp;navigate=yes" class="btn btn-outline-info btn-sm"><i class="fas fa-map-marked-alt"></i> Ir Waze</a>--></p>
					
					<h4>Teléfono:</h4>
					<p><a class="link" href="tel://+56954115863" target="_blank">+56 9 5411 5863</a></p>
					<h4>Email:</h4>
					<p><a class="link" href="mailto:contactoventas@icpacifico.cl">contactoventas@icpacifico.cl</a></p>
					<h4>Horario Atención:</h4>
					<p>Lunes a Viernes de 09:00 a 19:00.</p>
					<p>Sábado y Domingo de 11:00 a 14:00 y de 15:00 a 19:00.</p>
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
	    				<input id="proyectoid" type="hidden" name="proyectoid" value="7">
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
	    						<option value="B">Modelo B 2 dorm. 1 baño</option>
	    						<option value="C">Modelo C 1 dorm. 1 baño</option>
	    					</select>
	    				</div>

	    				<div class="col-12 col-md-6 espacio">
	    					<select name="medio" id="medio" class="form-control">
	    						<option value="" selected>Cómo llegó a nosotros</option>
	    						<!--<option value="Diario el Día">Diario el Día</option>
	    						<option value="Radio">Radio</option>-->
	    						<option value="Facebook">RRSS</option>
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

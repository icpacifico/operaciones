@extends('sitioweb.app')

@section('content')
@parent
<div id="banner-top">
	    <div class="container-fluid">	
			<section id="slider-sec" class="slider4">		
				<div id="slider4" class="carousel slide carousel-fade" data-bs-ride="carousel">					
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active unico">                    
							<img src="{{ Vite::asset('resources/img/slide/bw3100.png') }}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{ Vite::asset('resources/img/slide/bm3100.png') }}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>                    
						</div>
						<div class="carousel-item unico">                    
							<img src="{{ Vite::asset('resources/img/slide/web_banner_icp_2-100.jpg') }}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{ Vite::asset('resources/img/slide/movil_banner_icp_2-100.jpg') }}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>                    
						</div>
						<div class="carousel-item unico">                    
							<img src="{{ Vite::asset('resources/img/slide/bwdistrito.png') }}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{ Vite::asset('resources/img/slide/bmdistrito.png') }}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>                    
						</div>
						<div class="carousel-item unico">                    
							<img src="{{ Vite::asset('resources/img/slide/bwdistrito2.png') }}" alt="ICpacifico" class="slide-image d-none d-md-block" />
							<img src="{{ Vite::asset('resources/img/slide/bmdistrito2.png') }}" alt="ICpacifico" class="slide-image d-block d-md-none" />
							<div class="bs-slider-overlay d-none d-md-block"></div>                    
						</div>                
						
					</div>				
						<button class="carousel-control-prev" type="button" data-bs-target="#slider4" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#slider4" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
						
				</div>       
			</section>    
	    </div>
    </div>

<div id="presenta">
    <div class="container">
    	<div class="row align-items-center" id="cotizacion">
    		<div class="col-md-7 pb-5 pb-md-0">    			
    			<img src="{{ Vite::asset('resources/img/logowp.png') }}" class="img-fluid wp"/>
    			<div>
    				<h2 class="h21">AHORA</h2>
    			</div>
    			<div>
    				<h2 class="h22">Disfruta sin preocupaciones<br><span>Paga el pie en cuotas</span></h2>
    			</div>
    			<div class="pt-3">
	    			<!-- <button type="button" onclick="window.location='/proyectos/3/pacifico-3100-etapa-1#cotizacion'" class="btn btn-success-gradiant btn-md btn-arrow mb-3"><span>Cotiza Aquí</span></button> -->
					<button type="button" onclick="agendarVideoLlamada()" class="btn btn-success-gradiant btn-md btn-arrow"><span> Agenda Una Video Llamada</span></button>
					<button type="button" onclick="window.location='https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=83296123'" class="btn btn-success-gradiant btn-md btn-arrow mb-3"><span>Pagar aquí</span></button>
				</div>
    		</div>
	    	<div class="col-md-5 px-0">
				<img src="{{ Vite::asset('resources/img/imgwp1.png') }}" class="img-fluid" />
			</div>
	    </div>        
        <div class="row virtuales align-items-center">
        	<div class="col-md-6 cols">
				<div class="ratio ratio-1x1">
  	              <iframe class="frames" width = "100%" src = " https://my.matterport.com/show/?m=DmtQBSUXc2U" frameborder = "0" allowfullscreen allowvr="yes"> </iframe>
				</div>
        		
        		<div class="flotante_virtual d-none d-md-flex align-items-center click_caja"><p>Visita nuestros pilotos virtuales desde cualquier parte del mundo</p></div>
        	</div>
        	<div class="col-md-6 cols">
				<div class="ratio ratio-1x1">
    	    		<iframe class="frames render" width="100%" src=" https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allowvr="yes"> </iframe>
				</div>
        	</div>
        	<div class="bajo_recor col-md-12 d-flex justify-content-center">
        		<div class="ver_recor d-flex align-items-center"><p>Ver Recorrido Virtual</p></div>
        		<div class="verde_360"><img src="{{ Vite::asset('resources/img/360n.png') }}" width="96" class="img-fluid"></div>
        		<div class="ver_recor d-none d-md-flex align-items-center"><p>Ver Recorrido Virtual</p></div>
        	</div>
        </div>
    </div>
</div>

<div id="bienve" style="overflow: hidden;">
    <div class="container">
        <!-- row  -->
        <div class="row">
			<div class="col-md-12">				
				<div class="ratio ratio-4x3" data-aos="fade-in">
				  	<iframe  src="{{ 'https://www.youtube.com/embed/h5Du3LqHl2k' }}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			</div>
        </div>
    </div>    
</div>
@endsection

@extends('sitioweb.app')

@section('style')
<style>
    .notifyjs-bootstrap-base {
    font-weight: bold;
    padding: 10px 15px 10px 14px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    background-color: #ebcfa6;
    border: 1px solid #DBA861;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    white-space: nowrap;
    padding-left: 25px;
    background-repeat: no-repeat;
    background-position: 3px 7px;
}

.notifyjs-foo-base {
  opacity: 0.9;
  width: 240px;
  background: #10457e;
  padding: 5px;
  border-radius: 10px;
}

.notifyjs-foo-base .title {
  width: 140px;
  float: left;
  line-height: 18px;
  color: #FFFFFF;
  margin: 10px 0 0 10px;
  text-align: right;
  font-size: 1.3rem;
}

.notifyjs-foo-base .buttons {
  width: 70px;
  float: right;
  font-size: 11px;
  padding: 5px;
  margin: 2px;
}

.notifyjs-foo-base button {
  font-size: 11px;
  padding: 3px;
  margin: 2px;
  color: #FFFFFF;
  width: 50px;
  background-color: #94a8bd;
  border: none;
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

#cotizacion{
	padding-top: 20px;
    padding-bottom: 20px;
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
    /*background: #67c42b;
    background: -webkit-linear-gradient(legacy-direction(to right), #67c42b 0%, #3aba85 100%);
    background: -webkit-gradient(linear, left top, right top, from(#67c42b), to(#3aba85));
    background: -webkit-linear-gradient(left, #67c42b 0%, #3aba85 100%);
    background: -o-linear-gradient(left, #67c42b 0%, #3aba85 100%);
    background: linear-gradient(to right, #67c42b 0%, #3aba85 100%);*/
    border: 0px;
    background: #ffde01;
	border: 2px solid #ff9601;
	color: #545454;
	font-weight: 400;
	font-size: 1.4rem;
	box-sizing: border-box;
	border-radius: 10px !important;
}

#cotizacion h2 {
    font-size: 1.8rem;
    font-weight: 300;
    color: #5E5E5E;
    text-align: center;
}



.ug-thumb-wrapper.ug-tile.ug-tile-clickable.ug-thumb-ratio-set img{
	opacity: 0.3;
    transition: opacity 1s ease-in-out !important;
}

.ug-thumb-wrapper.ug-tile.ug-tile-clickable.ug-thumb-ratio-set.ug-thumb-over img{
	opacity: 1;
}

button.btn {
    color: #ffffff;
    padding: 10px 25px;
    cursor: pointer;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-radius: 0rem !important;
    padding: 20px 35px !important;
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    font-size: 1.4rem;
}

.frase{
	position: relative;
	width: 100%;
	text-align: center;
}

.frase h4{
	position: absolute;
	z-index: 100;
	width: 100%;
	color: #FFFFFF;
	font-size: 2rem;
	margin-top: 50px;
	text-shadow: #000000 1px 0 10px; 
	font-weight: 100;
    text-shadow: 0 0 10px #0f1011;
    line-height: 1.1;
    letter-spacing: .6px;

}

@media (max-width: 650px) {
	#cotizacion .btn-success-gradiant {
	    border: 0px;
	    background: #ffde01;
		border: 2px solid #ff9601;
		color: #545454;
		font-weight: 400;
		font-size: 1rem;
		box-sizing: border-box;
		border-radius: 10px !important;
	}

	button.btn {
	    color: #ffffff;
	    cursor: pointer;
	    -webkit-box-shadow: none !important;
	    box-shadow: none !important;
	    border-radius: 0rem !important;
	    padding: 10px 15px !important;
	    font-family: 'Oswald', sans-serif;
	    font-weight: 300;
	    font-size: 1.6rem;
	}
	#cotizacion .h22{
		display: inline-block !important;
	}
	#cotizacion .btn-success-gradiant{
		font-size: .7rem !important;
	}

}

#bienve iframe.frames {
    height: 405px;
}
#cotizacion .wp{
	max-height: 25px;
	display: block;
}
#cotizacion .h21{
	text-align: left;
	text-transform: uppercase;
	color: #fff;
	background-color: #b13582;
	font-weight: bold;
	display: inline;
	line-height: 2;
}
#cotizacion .h22{
	text-align: left;
	color: #fff;
	background-color: #9dbc55;
	font-weight: 300 !important;
	display: inline;
	line-height: 1;
	font-size: 2.5rem;
}
#cotizacion .h22 span{
	font-weight: bold !important;
	font-size: 2rem;
}
#cotizacion .btn-success-gradiant{
    background: #ae337f;
    border: none;
    color: #fff;
    font-weight: 400;
    font-size: 1rem;
    box-sizing: border-box;
    border-radius: 0 !important;
    padding: .5rem 1rem !important;
    margin: 0 !important;
    font-weight: bold !important;
}
</style>
@endsection

@section('content')
@parent
<div id="banner-home">
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

<div id="home">
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
        	</div>
        	<div class="col-md-6 cols">
				<div class="ratio ratio-1x1">
    	    		<iframe class="frames render" width="100%" src=" https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allowvr="yes"> </iframe>
				</div>
        	</div>

			
			{{-- <div class="flotante_virtual click_caja"><p>Visita nuestros pilotos virtuales desde cualquier parte del mundo</p></div> --}}
        	<div class="col-md-12 d-flex justify-content-center" style="margin-top:-425px;">
				
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

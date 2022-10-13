@extends('sitioweb.app')

@section('style')
<style>
	/* @import url(../../scss/icons/themify-icons/themify-icons.css); */
/************** Banner Top **************************/	
/* Half Page Height Carousel Customization */
#banner-top{
    /*background-color: #f1f0ed;*/
    /*min-height: 50vh;*/
    padding-top: 100px;
}

#banner-top>.container{
    background-color: #FFFFFF;
    min-height: 100%;
    padding-top: 8px;
    padding-bottom: 30px;
}

#banner-top .carousel{
    /*height: 84vh;
    min-height: 600px;*/
}

#banner-top .carousel-inner {
    height: 100%;
}

#banner-top .carousel .carousel-item {
  /*height: 83vh;*/
  background-color: #e8e8e8;
}

/* Small devices (tablets, 768px and up) */
@media (max-width: 768px) {
    #banner-top .carousel{
        height: 43vh;
    }
    #banner-top .slide-image{
        width: 100% !important;
        height: auto !important;
    }
    #banner-top .carousel-inner {
        height: 100%;
    }

    #banner-top .carousel .carousel-item {
      height: 60vh;
      background-color: #e8e8e8;
    }

}

/*solo si se carga como fondo*/
#banner-top .fill {
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
  #banner-top .fill {
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


#banner-top #carouselweb .carousel-caption {
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
    #banner-top #carouselweb .carousel-caption h3{
        background-color: rgba(0, 0, 0, .7);
        padding: 10px 5px;
    }

    #banner-top #carouselweb .carousel-caption {
        width: 95%;
    }
}

#banner-top #carouselweb .carousel-caption h3{
  display: inline-block;
  font-size: 1.1rem;
  line-height: 1.45rem;
}

#banner-top #carouselweb .carousel-caption p{
  font-size: .95rem;
  text-align: justify;
}


#banner-top .carousel-item #textos{
    position: absolute;
    z-index: 10;
    right: 0;
}

@media (max-width: 768px) {
    #banner-top .container-fluid{
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
}

/*#presenta*/
#presenta{
    padding-top: 10px;
    text-align: justify;
    background-image: url(../img/bg_home_1.jpg);
    background-repeat: repeat-x;
    background-position: 0 450px;
}

@media (max-width: 768px) {
    #presenta{
        padding-top: 5px;
        text-align: justify;
        background-image: url(../img/bg_home_1.jpg);
        background-repeat: repeat-x;
        background-position: 0 450px;
    }
}

#presenta .flotante_virtual{
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

#presenta .flotante_virtual.click_caja.oculta{
    bottom: -75px;
    right: -140px;
    cursor: default;
    min-height: 74px;
}

.bajo_recor{
    margin-top: -5px;
}

#presenta .verde_360{
    background-color: #8dbe44;
    width: 280px;
    text-align: center;
    padding: 12px 0px;
}

@media (max-width: 768px) {
    #presenta .verde_360{
        background-color: #8dbe44;
        width: 100%;
        text-align: center;
        padding: 12px 0px;
    }
}

#presenta .flotante_virtual p{
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    font-size: 1rem;
}

#presenta .ver_recor{
    padding: 10px 38px;
    background-color: #FFFFFF;
    text-align: center;
}

#presenta .ver_recor p{
    margin-bottom: 0;
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    font-size: 1.15rem;
}

#presenta .caja{
    background-size: 100%;
    width: 100%;
    height: 253px;
    overflow: hidden;
    background-position: 0px 0px;
    transition: background-size .3s ease-in;
    -moz-transition: background-size .3s ease-in;
    -ms-transition: background-size .3s ease-in;
    -o-transition: background-size .3s ease-in;
    -webkit-transition: background-size .3s ease-in;
}

@media (max-width: 760px) {
    #presenta .caja{
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        height: 190px;
        overflow: hidden;
        background-position: 0px 0px;
        transition: background-size .3s ease-in;
    -moz-transition: background-size .3s ease-in;
    -ms-transition: background-size .3s ease-in;
    -o-transition: background-size .3s ease-in;
    -webkit-transition: background-size .3s ease-in;
    }
}

#presenta .caja:hover{
    background-size: 104%;
    cursor: pointer;
    /*background-position: -5px 0px;*/
}

#presenta .caja.uno{
    background-image: url(../img/caja_1.jpg);
}

#presenta .caja.dos{
    background-image: url(../img/caja_2.jpg);
}

#presenta .virtuales iframe.frames{
    height: 410px;
}

@media (max-width: 768px) {
    #presenta .virtuales iframe.frames{
        height: 200px;
    }
}

/*novedades*/
#bienve{
    padding-top: 55px;
    padding-bottom: 30px;
    overflow-x: hidden;
    background-image: url(../img/bg_home_1.jpg);
    background-repeat: repeat-x;
    background-position: 0 -350px;
}

@media (max-width: 760px) {
    #bienve{
        padding-top: 10px;
        padding-bottom: 10px;
    }
}

#bienve .item h3{
    font-size: 1.12rem;
    line-height: 1.4rem;
    margin-bottom: 10px;
    margin-top: 10px;
}

#bienve .item h3 a{
    color: #c80085;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

#bienve .item h3 a:hover{
    color: #5B003D;
}

#bienve .item h6{
    font-size: .75rem;
    margin-top: 0px;
    margin-bottom: 2px;
    color: #BFBFBF;
}
#bienve .item p{
    font-size: .9rem;
    line-height: 1.4rem;
}

#slide_proyecto{
    overflow-x: hidden;
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
</style>
@endsection

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
        		
        		
				
        	</div>
        	<div class="col-md-6 cols">
				<div class="ratio ratio-1x1">
    	    		<iframe class="frames render" width="100%" src=" https://my.matterport.com/show/?m=4Sbr7iLm1CY" frameborder = "0" allowfullscreen allowvr="yes"> </iframe>
				</div>
        	</div>

			
			{{-- <div class="flotante_virtual click_caja"><p>Visita nuestros pilotos virtuales desde cualquier parte del mundo</p></div> --}}
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

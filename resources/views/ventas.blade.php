@extends('sitioweb.app')

@section('style')
<style>
	#banner-top {
	    background-color: #89816B;	  
	    padding-top: 128px;
	    padding-bottom: 32px;
	    background: none;
	}

	#banner-top h2 {
	    text-align: center;
	    font-weight: 400;
	    color: #67c42b;
	}

	#ventas h3{
		font-size: 1.5rem;
		color: #9dbc55;
		line-height: 1;
		font-weight: 200;
		padding-bottom: 1rem;
		position: relative;
	}
	#ventas h3::after{
		content: '';
		width: 40%;
		height: 3px;
		background-color: #b13582;
		position: absolute;
		left: 0;
		bottom: 5px;
	}
	#ventas h3 span{
		font-weight: 600;
	}

	#ventas {
		padding-bottom: 20px;
		padding-top: 100px;
		background-color: #ededed;		
	}

	.bg_lines{
		background-image: url({{Vite::asset('resources/img/equipo/fondoequipo.png')}});
		background-position: center top;
		background-repeat: no-repeat;
		-webkit-background-size: 70%;
		background-size: 70%;
		padding-top: 30px;
	}

	.verde{
	    text-align: center;
	    font-weight: 300;
	    color: #9dbc55;
	    margin-bottom: 1rem;
	    font-size: 2.5rem;
	}
	
	/* .titulo{
		padding-bottom: 0;
	} */
	.caja1{
		padding: 0;
		margin-top: 40%;
	}
	.caja2{
		padding: 0;
		margin-top: 40%;
	}
	.borde{		
		border: 2px solid #b73481;
		width: 90%;
    	margin: 0 auto;
	}
	.imagen{
		position: absolute;
	    top: -40%;
	    text-align: center;
	    width: 94%;
	    margin: 0 auto;
	    left: 0;
	    right: 0;
	}
	.caja1 .info{
		margin-top: 50%;
		padding: 10px;
	}
	.caja2 .info{
		margin-top: 50%;
		padding: 0 .5rem;
	}
	.info p{
		color: #9e9e9d;
		margin-bottom: 5px;
	}
	p.links{
		margin: 15px 0;
	}
	#ventas2 {
		padding-bottom: 80px;
		padding-top: 60px;
	}

	.containerButton{
		width: 35%;
	}

	.btnAgenda{
		cursor: pointer;
	}

	.btnAgenda .btnAgendaIcon{
		background-color: #00b613;
		color: #FFFFFF;
		padding: 12px 17px;
	}

	.btnAgenda .btnAgendaText{
		background-color: #00dc58;
		color: #FFFFFF;
		text-align: center;
		padding-top: 12px;
		font-size: 1.2rem;
		font-weight: 700;
		letter-spacing: .2rem;
	}		
	@media (min-width: 992px) {
		.borde{
			margin: 0 .1rem;
			border: 2px solid #b73481;
			width: 98%;
		}
		.titulo{
			padding-bottom: 10%;
		}
		.caja1{
			padding: 0;
			margin-top: 0;
		}
		.caja2{
			padding: 0;
			margin-top: 3rem;
		}
		.caja1 .info{
			margin-top: 65%;
			padding: 0 .5rem;
		}
		.caja2 .info{
			margin-top: 70%;
			padding: 0 .5rem;
		}
		#ventas h2 {
		    text-align: center;
		    font-weight: 300;
		    color: #9dbc55;
		    margin-bottom: 3rem;
		    font-size: 2.5rem;
		}
	
	}
	@media (min-width: 1200px){
		.container {
		    max-width: 1270px;
		}
	}
	@media (max-width: 650px) {
		#ventas h2 {
		    font-size: 1.5rem;
		    line-height: 1;
		}

		.containerButton{
			width: 100%;
		}

		.btnAgenda{
			width: 100%;
		}

	}

</style>
@endsection
@section('content')
@parent
<div id="ventas">
	<div class="bg_lines">
	    <div class="container">
	        <!-- row  -->
	        <div class="row justify-content-center">
	        	<div class="col-12 titulo mb-5">
	        		<p class="lead text-center">Equipo de Ventas</p>
					<h1 class="verde display-6" style="color: #9dbc55;">Tu <span style="font-weight: 600;">confianza</span> es el resultado de nuestra asesoría</h1>
				</div>	        	
				<div class="col-12 col-lg-2 caja1">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/jeannisse2.jpg')}}" width="178" height="233" class="img-thumbnail">
						</div>
						<address class="info">
							<h3><span>Jeannisse</span><br>
							Medina Calderón</h3>
							<p>Asesora inmobiliaria</p>
							<p>+56 9 54126944</p>
							<p>jmedina@icpacifico.cl</p>
							<p class="links">
								<a href="https://www.facebook.com/jmedina.icpacifico/" target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid"/></a>
								<a href="https://www.instagram.com/jmedinaicpacifico/" target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid"/></a>
								<a href="https://wa.me/56954126944" target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid"/></a>
							</p>
						</address>
					</div>
				</div>
				<div class="col-12 col-lg-2 caja2">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/kriss.png')}}" class="img-thumbnail">
						</div>
						<div class="info">
							<h3><span>Kriss</span><br>
							Aguirre Zambra</h3>
							<p>Asesora inmobiliaria</p>
							<p>+56 9 54130065</p>
							<p>kaguirre@icpacifico.cl</p>
							<p class="links">
								<a href="https://www.facebook.com/kriss.icpacifico.7"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid d-inline"/></a>
								<a href="https://www.instagram.com/kriss_icpacifico/"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid d-inline"/></a>
								<a href="https://wa.me/56954130065"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid d-inline"/></a>
							</p>
						</div>
					</div>
				</div>				
				<div class="col-12 col-lg-2 caja2">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/erica.png')}}" class="img-thumbnail">
						</div>
						<div class="info">
							<h3><span>Erica</span><br>
							Torres Alvarado</h3>
							<p>Asesora inmobiliaria</p>
							<p>+56 9 47960446</p>
							<p>etorres@icpacifico.cl</p>
							<p class="links">
								<a href="https://www.facebook.com/asesor.erica/"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid d-inline"/></a>
								<a href="https://www.instagram.com/erica_icpacifico/"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid d-inline"/></a>
								<a href="https://wa.me/56947960446"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid d-inline"/></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-2 caja1">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/ernesto_new.png')}}" class="img-thumbnail">
						</div>
						<div class="info">
							<h3><span>Ernesto</span><br>
							Pereda Pizarro</h3>
							<p>Asesor inmobiliario</p>
							<p>+56 9 48596196</p>
							<p>epereda@icpacifico.cl</p>
							<p class="links">
								<a href="#" target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid"/></a>
								<a href="#" target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid"/></a>
								<a href="https://wa.me/56948596196" target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid"/></a>
							</p>
						</div>
					</div>
				</div>				
	        </div>
	   	</div>
   	</div>
</div>
@endsection
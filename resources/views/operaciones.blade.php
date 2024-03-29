@extends('sitioweb.app')

@section('style')
<style>

	#operaciones h3{
		font-size: 1.5rem;
		color: #9dbc55;
		line-height: 1;
		font-weight: 200;
		padding-bottom: 1rem;
		position: relative;
	}
	#operaciones h3::after{
		content: '';
		width: 40%;
		height: 3px;
		background-color: #b13582;
		position: absolute;
		left: 0;
		bottom: 5px;
	}
	#operaciones h3 span{
		font-weight: 600;
	}

	#operaciones {					
		background-color: #ededed;
		
	}

	.bg_lines{
		background-image: url({{Vite::asset('resources/img/equipo/fondoequipo.png')}});
		background-position: center top;
		background-repeat: no-repeat;
		-webkit-background-size: 70%;
		background-size: 70%;
		padding-top: 125px;
		padding-bottom:20px;
	}

	#operaciones h2 {
	    text-align: center;
	    font-weight: 300;
	    color: #9dbc55;
	    margin-bottom: 1rem;
	    font-size: 2.5rem;
	}
	#operaciones h2 span{
		font-weight: 600;
	}
	
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
	    top: -30%;
	    text-align: center;
	    width: 90%;
	    margin: 0 auto;
	    left: 0;
	    right: 0;
	}
	.caja1 .info{
		margin-top: 60%;
		padding: 0 .5rem;
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
	#operaciones2 {
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

	.bajada{
		font-weight: 300;
		text-align: center;
		font-size: 1.2rem;
		color: #a8a8a7;
	}

	.bajada span{
		font-weight: 400;
		font-style: italic;
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
			margin-top: 75%;
			padding: 0 .5rem;
		}
		.caja2 .info{
			margin-top: 70%;
			padding: 0 .5rem;
		}
		#operaciones h2 {
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
		#operaciones h2 {
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
<div id="operaciones">
	<div class="bg_lines">
	    <div class="container">	        
	        <div class="row justify-content-center">
	        	<div class="col-12 titulo">
	        		<p class="lead text-center">Equipo de Operaciones</p>
					<h1 class="verde display-6 text-center" style="color: #9dbc55;">Nuestra <span style="font-weight: 600;">misión</span> es acompañarte en el proceso de la escrituración de tu departamento</h1>
				</div>	        	
				<div class="col-12 col-lg-2 caja1">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/sara.png')}}" class="img-fluid">
						</div>
						<div class="info">
							<h3><span>Sara</span><br>
							Araya Bugueño</h3>
							<p>Jefe de Operaciones </p>
							<p>+56 9 54115855</p>
							<p>saraya@icpacifico.cl</p>
							<p class="links">
								<a href="https://www.facebook.com/Sara.icpacifico" target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid"/></a>
								<a href="https://www.instagram.com/Sara.icpacifico/" target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid"/></a>
								<a href="https://wa.me/56954115855" target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid"/></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-2 caja1">
					<div class="position-relative borde">
						<div class="imagen">
							<img src="{{Vite::asset('resources/img/equipo/margot.png')}}" class="img-fluid">
						</div>
						<div class="info">
							<h3><span>Margot Andrea</span><br>
							Moya Olivares</h3>
							<p>Encargada Operaciones</p>
							<p>+56 9 54126929</p>
							<p>mmoya@icpacifico.cl</p>
							<p class="links">
								<a href="https://www.facebook.com/ICPANDREA" target="_blank"><img src="{{Vite::asset('resources/img/equipo/facebook.png')}}" class="img-fluid"/></a>
								<a href="https://www.instagram.com/andrea_icpacifico/" target="_blank"><img src="{{Vite::asset('resources/img/equipo/instagram.png')}}" class="img-fluid"/></a>
								<a href="https://wa.me/56954126929"  target="_blank"><img src="{{Vite::asset('resources/img/equipo/whatsapp.png')}}" class="img-fluid d-inline"/></a>
							</p>
						</div>
					</div>
				</div>
				
	        </div>
	   	</div>
   	</div>
</div>
@endsection


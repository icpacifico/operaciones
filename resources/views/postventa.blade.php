@extends('sitioweb.app')

@section('style')
<style>
	#banner-top {
	    background-color: #89816B;
	    /* min-height: 50vh; */
	    padding-top: 128px;
	    padding-bottom: 32px;
	    background: none;
	}

	#banner-top h2 {
	    text-align: center;
	    font-weight: 400;
	    color: #67c42b;
	}

	#presenta h3{
		font-size: 2.5rem;
		color: #9dbc55;
		line-height: 1;
		font-weight: 200;
		padding-bottom: 1rem;
		position: relative;
	}
	#presenta h3::after{
		content: '';
		width: 20%;
		height: 3px;
		background-color: #b13582;
		position: absolute;
		left: 0;
		bottom: 5px;
	}
	#presenta h3 span{
		font-weight: 600;
	}

	#presenta {
		padding-bottom: 20px;
		padding-top: 100px;
		background-color: #ededed;
		/*background-image: url(images/bg_equipo.jpg);
		background-size: cover;
		background-position: left top;
		border-bottom: 3px solid #f8f8f8;*/
	}

	.bg_lines{
		background-image: url(images/fondoequipo.png);
		background-position: center top;
		background-repeat: no-repeat;
		-webkit-background-size: 70%;
		background-size: 70%;
		padding-top: 30px;
	}

	#presenta h2 {
	    text-align: center;
	    font-weight: 300;
	    color: #9dbc55;
	    margin-bottom: 1rem;
	    font-size: 2.5rem;
	}
	#presenta h2 span{
		font-weight: 600;
	}
	.titulo{
		padding-bottom: 0;
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
		margin-bottom: 0;
		font-size: 1.2rem;
	}
	p.links{
		margin: 15px 0;
	}
	#presenta2 {
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

	.bajada2{
		font-weight: 300;
		text-align: center;
		font-size: 1.4rem;
		color: #a8a8a7;
	}
	.bajada2 span{
		font-weight: 600;
	}

	.bajada span{
		font-weight: 400;
		font-style: italic;
	}

	p.links img{
		/*height: 25px;*/
	}

	.btn-success-g {
	    background: #9dbc55;
	    border: none;
	    color: #fff;
	    font-weight: 200;
	    font-size: 1.3rem;
	    box-sizing: border-box;
	    border-radius: 0 !important;
	    margin: 0 !important;
	    cursor: pointer;
	    padding: 10px 25px;
	}
	.btn-success-g span{
		font-weight: 600;
	}
	@media (min-width: 992px) {
		.btn-success-g {
		    font-size: 2rem;
		}
		.borde{
			margin: 0 .1rem;
			border: 2px solid #b73481;
			width: 98%;
		}
		.titulo{
			padding-bottom: 0;
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
		#presenta h2 {
		    text-align: center;
		    font-weight: 300;
		    color: #9dbc55;
		    margin-bottom: 3rem;
		    font-size: 2.5rem;
		}
	
	}
	
	@media (max-width: 650px) {
		#presenta h2 {
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
<div id="presenta">
	<div class="bg_lines">
	    <div class="container">
	        <!-- row  -->
	        <div class="row justify-content-center">
	        	<div class="col-12 titulo">
	        		<p class="bajada">Equipo Post Venta</p>
					<h2><span>Nuestro objetivo</span><br>
					es apoyarte en caso de cualquier imprevisto</h2>
				</div>
			</div>
			<div class="row justify-content-center align-items-center">
	        	<!--<div class="col-12">
	        		<img src="https://icpacifico.cl/images/equipo_completo.png" class="img-fluid mb-2">
				</div>-->
				<div class="col-12 col-lg-4">
					<div class="imagen">
						<img src="https://icpacifico.cl/images/equipo/wanda.png" class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-lg-4 pl-lg-5 pt-5 pt-lg-0">
					<div class="info">
						<h3><span>Wanda</span> Rojas</h3>
						<p>Jefe de Postventa </p>
						<p>wrojas@icpacifico.cl</p>
					</div>
				</div>
	        </div>
	        <div class="row justify-content-center">
	        	<div class="col-12 pt-5 text-center">
	        		<p class="bajada2">¿Tienes dudas? <span>Contáctanos aquí</span></p>
					<button type="button" onclick="window.location='mailto:postventa@icpacifico.cl'" class="btn-success-g mb-3"><span>postventa</span>@icpacifico.cl</button>
				</div>
			</div>
			<div class="row justify-content-center">
	        	<div class="col-12 pt-5 text-center">
					<img src="https://icpacifico.cl/images/equipo/equipopostventa.png" class="img-fluid mb-2">
				</div>
			</div>
	   	</div>
   	</div>
</div>

@endsection
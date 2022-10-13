@extends('sitioweb.app')


@section('style')
<style>
    @media (max-width: 1023px){
        .d-flex {
            display: flex !important;
        }
    }
    
    #ais {
        padding-top: 0;
        padding-bottom: 0;
    }
    .cajaais{
        min-height: 325px;
        padding: 3rem;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
    
    .celeste{
        background-color: #38abd7;
    }
    
    .azul{
        background-color: #012d6c;
    }
    
    h2{
        font-weight: 300;
        font-size: 1.9rem;
        line-height: 2.1rem;
    }
    
    h2 strong{
        font-weight: 500;
    }
    
    .cajaais.azul h2,
    .cajaais.azul h3{
        text-align: center;
        color: #FFFFFF;
    }
    
    .cajaais p{
        text-align: center;
    }
    
    .cajaais.celeste p{
        text-align: center;
        color: #FFFFFF;
    }
    
    .big{
        font-size: 1.2rem;
    }
    
    .cajaais.celeste h2,
    .cajaais.celeste h3{
        text-align: center;
        color: #FFFFFF;
    }
    </style>
@endsection

@section('content')
@parent

<div id="banner-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2>Ais ®</h2>
			</div>
		</div>
	</div>
</div>

<div id="ais">
    <div class="container-fluid">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-4 cajaais d-flex justify-content-center align-items-center celeste">
				<h2 class="text-uppercase">¿Has Pensado en <strong>tu futuro y el de tu familia</strong>?</h2>
        	</div>
        	<div class="col-md-4 cajaais d-flex flex-column justify-content-center align-items-center">
				<h2 class="text-uppercase text-center">Hoy es un buen momento para hacerlo</h2>
				<img src="https://icpacifico.cl/images/ais.png" width="200" class="img-fluid my-3"/>
				<!-- <p>Sistema de rentabilidad inmobiliaria donde Inviertes, Administras, Rentabilizas y Decides qué hacer con tus ingresos</p> -->
        	</div>
        	<div class="col-md-4 cajaais" style="background-image: url(https://icpacifico.cl/images/ais/01.jpg);">

        	</div>
        	<div class="col-md-4 cajaais azul d-flex justify-content-center align-items-center">
				<h2 class="text-uppercase text-center">Te preguntas <strong>¿Dónde invertir?</strong></h2>
        	</div>
        	<div class="col-md-4 cajaais" style="background-image: url(https://icpacifico.cl/images/ais/02.jpg);">

        	</div>
        	<div class="col-md-4 cajaais d-flex flex-column justify-content-center align-items-center celeste">
				<h3>La Serena</h3>
				<p class="big">Segunda ciudad turística más importante de Chile. Constante crecimiento de la taza de alojamiento. Es una ciudad de alta demanda en arriendo.</p>
        	</div>
        	<div class="col-md-4 cajaais" style="background-image: url(https://icpacifico.cl/images/ais/03.jpg);">

        	</div>
        	<div class="col-md-4 cajaais d-flex flex-column justify-content-center align-items-center">
        		<img src="https://icpacifico.cl/images/logo-top.png" class="img-fluid mb-3" width="180"/>
				<h2 class="text-uppercase text-center"><strong>Descubre</strong> NUESTROS PROYECTOS</h2>
        	</div>
        	<div class="col-md-4 cajaais d-flex justify-content-center align-items-center" style="background-image: url(https://icpacifico.cl/images/ais/04.jpg);">
				<p class="big">Excelente relación Precio/Calidad. Ubicados en el centro neurálgico del turismo. Sector áltamente demandado y rentable.</p>
        	</div>
        	<div class="col-md-4 cajaais celeste d-flex justify-content-center align-items-center">
				<h2 class="text-uppercase text-center">¿Cómo <strong>rentabilizas tu inversión?</strong></h2>
        	</div>
        	<div class="col-md-4 cajaais" style="background-image: url(https://icpacifico.cl/images/ais/05.jpg);">

        	</div>
        	<div class="col-md-4 cajaais d-flex flex-column justify-content-center align-items-center">
        		<!-- <img src="/images/logo_deptos_pacifico.jpg" class="img-fluid mb-3" width="180"/> -->
				<p class="big">Nuestros proyectos se ubican a pasos de la playa en segunda línea, junto a toda la gastronomía de la región dentro del sector, a solo minutos del centro de La Serena y Coquimbo. Atributos únicos que lo hacen un proyecto muy atractivo para los arrendatarios de verano y todo el año.</p>
				<a class="btn btn-info-gradiant btn-rounded btn-md btn-arrow m-t-20 m-b-30" href="{{route('contacto')}}"><span>Consúltanos <i class="ti-arrow-right"></i></span></a>
        	</div>
        </div>
    </div>
</div>
@endsection
@extends('sitioweb.app')

@section('style')
<style>
	#presenta h3{
		font-size: 1.2rem;
		color: #545454;

	}

	#presenta a{
	    -webkit-transition: all 0.4s;
	    -o-transition: all 0.4s;
	    transition: all 0.4s;
	    color:#c80085;
	}

	#presenta p strong{
	    font-weight: 500;
	}

	#presenta a:hover{
		color: #545454;
	}

	div#map {
		height:450px;
	}

	@media (max-width: 768px) {
		div#map {
			height:350px;
		}
	}
</style>
@endsection
@section('content')
@parent

<div id="banner-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2>Contáctenos</h2>
			</div>
		</div>
	</div>
</div>

<div id="presenta">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-4 order-3 order-md-1">
        		<div id="map" class="map" style="width:100%; ">
                    <img src="../../assets/img/loading.gif">
                </div>
        		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.027976963318!2d-71.27672084816868!3d-29.921096748888562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca3d5f0d7115%3A0x6f5e9488a14017ea!2sAv.+Pac%C3%ADfico+2800%2C+La+Serena%2C+Regi%C3%B3n+de+Coquimbo!5e0!3m2!1ses!2scl!4v1545225712200" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        	</div>
        	<div class="col-md-3 order-1 order-md-2">
        						<h3>Sala de Ventas:</h3>

<p>Av. Pac&iacute;fico 3100 / Av. Pac&iacute;fico 2800.<br />
La Serena - Chile</p>

<h3>Tel&eacute;fono:</h3>

<p><a href="tel://+56979442005">+56 9 79442005</a></p>

<h3>Email:</h3>

<p><a href="mailto:contactoventas@icpacifico.cl">contactoventas@icpacifico.cl</a></p>
        	</div>
        	<div class="col-md-5 order-2 order-md-3">
        		<p class="mt-4 mt-md-0">Contáctenos a través del siguiente formulario.</p>
                <form class="cmxform form-horizontal mb-4 formula" id="commentForm" method="post">
                    <div class="form-group">
                        <label class="form-control-label" for="nombre">Nombre Completo</label>
                        <input type="text" minlength="3" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre completo" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="mail">E-mail</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Ingrese email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="fono">Teléfono</label>
                        <input type="number" class="form-control" id="fono" name="fono" placeholder="Ingrese teléfono">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="fono">Comentarios</label>
                        <textarea maxlength="500" minlength="4" id="comentarios" name="comentarios" class="form-control" placeholder="Ingrese comentarios" required></textarea>
                    </div>

                    <div class="text-right" id="contenedor_boton"><button class="btn btn-secondary" type="submit" role="button"/>Enviar</button></div>
                </form>
        	</div>
        	<!-- <div class="col-md-4">
        		<img src="/images/arriendos.jpg" class="img-fluid" data-aos="fade-right" data-aos-duration="1200">
        	</div> -->
        </div>
    </div>
</div>
@endsection
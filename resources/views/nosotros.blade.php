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
</style>
@endsection
@section('content')
@parent

<div id="banner-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2>Inmobiliaria Costanera Pacífico</h2>
			</div>
		</div>
	</div>
</div>

<div id="presenta">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-12">
        						<h3>&iquest;QUI&Eacute;NES SOMOS?</h3>

<p>Nuestra marca es sin&oacute;nimo de experiencia, cercan&iacute;a y profesionalismo, integrada por personas din&aacute;micas y altamente motivadas. Un equipo multidisciplinario de vasta trayectoria &nbsp;donde mentes inquietas encuentran respuestas &nbsp;a las necesidades de clientes e inversionistas para construir relaciones de confianza. Nuestros ejecutivos:</p>

<p><br />
Ejecutivos:<br />
- Sebastian Araya Varela: Gerente General Inmobiliaria Costanera Pac&iacute;fico SpA.<br />
- Cecilia Debia Garcia: Gerente Comercial Inmobiliaria Costanera Pac&iacute;fico&nbsp;SpA.<br />
-&nbsp;Jennifer Mondaca Jeraldo: Gerente de Ventas y Operaciones Inmobiliaria Costanera Pac&iacute;fico&nbsp;SpA.<br />
- Francisco Sep&uacute;lveda Moreno: Gerente General Constructora del Mar II SpA.</p>

<p>&nbsp;</p>

<h3>&iquest;QU&Eacute; OFRECEMOS?&nbsp;</h3>

<p>Una experiencia cliente que va m&aacute;s all&aacute; del inmueble. Ofrecemos una asesor&iacute;a inmobiliaria integral, con reales oportunidades de negocios para una de las m&aacute;s importantes inversiones de tu vida, ampliando el patrimonio y un complemento perfecto para los a&ntilde;os venideros.</p>
        	</div>
        	<!-- <div class="col-md-4">
        		<img src="/images/arriendos.jpg" class="img-fluid" data-aos="fade-right" data-aos-duration="1200">
        	</div> -->
        </div>
    </div>
</div>
@endsection

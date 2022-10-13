@extends('sitioweb.app')

@section('style')
<style>
	#nosotros h3{
		font-size: 1.2rem;
		color: #545454;

	}

	#nosotros a{
	    -webkit-transition: all 0.4s;
	    -o-transition: all 0.4s;
	    transition: all 0.4s;
	    color:#c80085;
	}

	#nosotros p strong{
	    font-weight: 500;
	}

	#nosotros a:hover{
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

<div id="nosotros" class="p-5">
    <div class="container">       
        <div class="row">
        	<div class="col-md-12">
        		{!!App\Models\Seccion::find(5)->descripcion_sec!!}
        	</div>        	
        </div>
    </div>
</div>
@endsection

@extends('sitioweb.app')

@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>

<style>
	#contacto h3{
		font-size: 1.2rem;
		color: #545454;

	}

	#contacto a{
	    -webkit-transition: all 0.4s;
	    -o-transition: all 0.4s;
	    transition: all 0.4s;
	    color:#c80085;
	}

	#contacto p strong{
	    font-weight: 500;
	}

	#contacto a:hover{
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

<div id="contacto" class="p-5">
    <div class="container">
        <!-- row  -->
        <div class="row">
        	<div class="col-md-4 order-3 order-md-1">
        		<div id="map" class="map" style="width:100%; ">
                    <img src="{{Vite::asset('resources/img/loading.gif')}}">
                </div>
        		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.027976963318!2d-71.27672084816868!3d-29.921096748888562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca3d5f0d7115%3A0x6f5e9488a14017ea!2sAv.+Pac%C3%ADfico+2800%2C+La+Serena%2C+Regi%C3%B3n+de+Coquimbo!5e0!3m2!1ses!2scl!4v1545225712200" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        	</div>
        	<div class="col-md-3 order-1 order-md-2">
        		{!!App\Models\Seccion::find(6)->descripcion_sec!!}
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

                    <div class="text-right" id="contenedor_boton"><button class="btn btn-secondary" type="submit" role="button">Enviar</button></div>
                </form>
        	</div>        	
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
	// $('#slider2').bsTouchSlider();

	$(document).ready(function() {

		var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			// osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
			osmAttrib = '',
			osm = L.tileLayer(osmUrl, {maxZoom: 16, attribution: osmAttrib});
		var map = L.map('map').setView([-29.92032794050309, -71.27463756875613], 17).addLayer(osm);
		var greenIcon = L.icon({
		    iconUrl: '{{Vite::asset("resources/img/marker.png")}}',
		    // shadowUrl: 'leaf-shadow.png',

		    iconSize:     [50, 61], // size of the icon
		    // shadowSize:   [50, 64], // size of the shadow
		    iconAnchor:   [20, 60], // point of the icon which will correspond to marker's location
		    shadowAnchor: [4, 62],  // the same for the shadow
		    popupAnchor:  [0, -56] // point from which the popup should open relative to the iconAnchor
		});

		var marker = new L.marker([-29.92032794050309, -71.27463756875613], {icon: greenIcon})
		.addTo(map)
		.bindPopup('<img src="{{Vite::asset('resources/img/logo-top.png')}}" width="110"><br>'+'<br><a target="_blank" href="https://waze.com/ul?ll=-29.92032794050309,-71.27463756875613&amp;navigate=yes" class="btn btn-outline-info btn-sm"><i class="fas fa-map-marked-alt"></i> Ir Waze</a>');
		var marker2 = new L.marker([-29.922040629547134, -71.27512012239063], {icon: greenIcon})
		.addTo(map)
		.bindPopup('<img src="{{Vite::asset('resources/img/logo-top.png')}}" width="110"><br>'+'<br><a target="_blank" href="https://waze.com/ul?ll=-29.922040629547134, -71.27512012239063&amp;navigate=yes" class="btn btn-outline-info btn-sm"><i class="fas fa-map-marked-alt"></i> Ir Waze</a>');
		// $.fancybox.open([{
		// 	src  : 'https://www.youtube.com/watch?v=STq6wfU17fk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0'
		// }]);
		// 
		function resultado(data)
		{
			toastr.options = {
		          "closeButton": false,
		          "debug": false,
		          "newestOnTop": false,
		          "progressBar": false,
		          "positionClass": "toast-top-full-width",
		          "preventDuplicates": false,
		          "onclick": function () { window.location='{{Request::url()}}'; } ,
		          "onHidden": function () { window.location='{{Request::url()}}'; } ,
		          "showDuration": "2000",
		          "hideDuration": "500",
		          "timeOut": "2000",
		          "extendedTimeOut": "1000",
		          "showEasing": "swing",
		          "hideEasing": "linear",
		          "showMethod": "fadeIn",
		          "hideMethod": "fadeOut"
		            }
		        // info de configuracion http://codeseven.github.io/toastr/demo.html
		    Command: toastr[data.alerta](data.msj, data.titulo)
		    
		};

		$('#commentForm').submit(function() {
	        $('#contenedor_boton').html('<img src="{{Vite::asset('resources/img/loading.gif')}}">');
	        var_nombre = $('#nombre').val();
	        var_nombre = var_nombre.replace(/\&/g,'{#@}');
	        var_nombre = var_nombre.replace(/\+/g,'{#@@}');
	        var_mail = $('#mail').val();
	        var_mail = var_mail.replace(/\&/g,'{#@}');
	        var_mail = var_mail.replace(/\+/g,'{#@@}');
	        var_fono = $('#fono').val();
	        var_fono = var_fono.replace(/\&/g,'{#@}');
	        var_fono = var_fono.replace(/\+/g,'{#@@}');
	        var_comentarios = $('#comentarios').val();
	        var_comentarios = var_comentarios.replace(/\&/g,'{#@}');
	        var_comentarios = var_comentarios.replace(/\+/g,'{#@@}');
	        
	        // $.ajax({
	        //     data:"nombre="+var_nombre+"&mail="+var_mail+"&fono="+var_fono+"&comentarios="+var_comentarios,
	        //     type: 'POST',
	        //     url: '{{Request::url()}}/graba_contacto.php',
	        //     dataType:'json',
	        //     success: function(data) {
	        //         resultado(data);
	        //     }           
	        // });
	    return false;
	    });
	});
</script>
@endsection
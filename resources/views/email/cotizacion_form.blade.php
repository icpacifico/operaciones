<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://icpacifico.cl" />
    <title>@yield('title','Inmobiliaria Costanera Pacífico - La Serena - Chile') </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Condominio Pacífico 2800, Avda. Pacífico en La Serena. Departamentos en venta de 2 y 3 dormitorios. Inversión Inmobiliaria, ideal inversores. A pasos de la playa.">	
	<meta name="keywords" content="departamento, departamentos en venta, departamentos en la serena,venta de departamentos, departamentos para inversion, avenida pacífico, la serena, chile">
	<meta name="author" content="icpacifico.cl">
	<link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
    <style>
        .contenedor{
            margin:3% 0 0 3%;
            /* display: flex; */
        }
        .tarjeta{
            display: flex;
            justify-content: center;
            max-width: 540px;
            /* border:1px solid grey; */
            box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
        }
        .imagen{
            padding-top:30px;
            padding-left:30px;
            width: 200px;
            /* border:1px solid grey; */
            flex-direction: column
        }
        .titulo{
            color:black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.3rem;
        }
        .mensaje{            
            width: 340px;
            padding:10px;
            /* border:1px solid grey; */
            flex-direction: column
        }
        
        .margenes{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color:grey;
            /* line-height: 70%; */
            padding-bottom:10%;;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <div class="tarjeta">
       
          <div class="imagen">
            <img src="{{'https://icpacifico.cl/firmas/image001.jpg'}}" width="170" height="200" class=" rounded-start" alt="...">
          </div>
          <div class="mensaje">
            <h5 class="titulo">Nuevo mensaje desde el formulario de cotización</h5>
            <div class="margenes">
              
              <p class="texto"><b>Nombre:</b> <i>{{ $data['nombre'] }}</i></p>
              <p class="texto"><b>Rut:</b> <i>{{ $data['rut'] }}</i></p>
              <p class="texto"><b>Correo:</b> <i>{{ $data['mail'] }}</i></p>
              <p class="texto"><b>Telefono:</b> <i>{{$data['codigo']}}{{ $data['telefono'] }}</i></p>              
              <p class="texto"><b>Direccion:</b> <i>{{ $data['direccion'] }}</i></p>              
              <p class="texto"><b>Ciudad:</b> <i>{{ $data['ciudad'] }}</i></p>              
              <p class="texto"><b>Proyecto:</b> <i>{{ $data['proyecto'] }}</i></p>              
              <p class="texto"><b>Modelo:</b> <i>{{ $data['modelo'] }}</i></p>              
              <p class="texto"><b>Medio:</b> <i>{{ $data['medio'] }}</i></p>              
              <p class="texto"><b>Comentarios:</b> <i>{{ $data['comentarios'] }}</i></p>              
            </div>
          </div>
        
      </div>
</div>

</body>
</html>
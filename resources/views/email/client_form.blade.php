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
           padding:3%;
            display: flex;
            justify-content: center;
            max-width: 540px;
            /* border:1px solid grey; */
            box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 10px 10px 10px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<div class="contenedor">
    <div class="tarjeta">
       
          <div class="imagen">
            <img src="{{'https://icpacifico.cl/firmas/image001.jpg'}}" width="170" height="200" class=" rounded-start" alt="...">
          </div>
          <table width='90%' border='0' style='margin:auto; font-family:Verdana, Geneva, sans-serif;'>            
            <tr>
              <td style='padding:10px; line-height:20px; font-size:13px; text-align:center'>
                  Muchas gracias por cotizar con nosotros. Tu consulta será revisada y atendida por uno de nuestros ejecutivos dentro de 24 hrs <br>
                  Conozca más de nuestro proyecto en:
              </td>
            </tr>
            <tr>
              <td style='text-align: center'><a href={{'https://www.facebook.com/icpacifico/'}} target='_blank'>
                <img src={{'https://icpacifico.cl/firmas/face-icon-mail.png'}} width='40'></a> &nbsp;&nbsp;
                <a href={{'https://www.instagram.com/costanerapacifico/'}} target='_blank'>
                <img src={{'https://icpacifico.cl/firmas/instagram-icon-mail.png'}} width='40'>
                </a><br><br></td>
            </tr>
            <tr height='28'>
                    <td style='font-size:11px; background-color:#88c440; color:#EEE; text-align:center; border-radius: 10px'>Inmobiliaria Costanera Pacífico <a href={{'http://www.icpacifico.cl'}} target='_blank' style='color: #FFF'>www.icpacifico.cl</a></td>
                  </tr>
          </table>
        
      </div>
</div>

</body>
</html>


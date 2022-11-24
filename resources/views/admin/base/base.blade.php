<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="AdminKit">
	<link rel="icon" href="{{ Vite::asset('resources/img/favicon.png') }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<title>Administrador inmobiliaria costanera pacifico</title>

	<link href="{{asset('style2/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	@yield('style_admin')
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/admin/inicio">
          <span class="align-middle">Icpacifico</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Paginas 
					</li>

					<li class="sidebar-item {{ request()->path() == "admin/inicio" ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/inicio">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item {{ request()->path() == "admin/parametros" ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/parametros">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Parametros</span>
						</a>
					</li>	
					
					<li class="sidebar-item {{ request()->path() == "admin/leads" ? 'active' : '' }}">
						<a class="sidebar-link" href="/admin/leads">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Leads</span>
						</a>
					</li>
				</ul>			
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<span class="text-dark">{{ Illuminate\Support\Facades\Auth::user()->name }}</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">							
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">cerrar sesión</button>
                                </form>								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
                @section('content_admin')
                @show				
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{asset('style2/app.js')}}"></script>	
@yield('script_admin')
</body>

</html>
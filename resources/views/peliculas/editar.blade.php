@section('title', 'Peliculas')
@section('content')
@extends('estilo.layout')

<html lang="es">
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img{
  display:block;
  margin:auto;
  }
  </style>
<link href="{{ asset('styles/bootstrap-4.1.2/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.csss') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
<link href="{{ asset('styles/main_styles.css') }}" rel="stylesheet">
<link href="{{ asset('styles/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('styles/comun.css') }}" rel="stylesheet">


</head>
<body>

<!-- Menu -->

<div class="menu">
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
      @if (Route::has('login'))
      @auth
      <li><strong>Bienvenido</strong> {{ auth()->user()->name }}
      <br><br>
      <li><a href="peliculas">Inicio</a></li>
      <li><a href="logout">Cerrar Sesión</a></li>

      @else

      <li><a href=""></a></li>
			<li><a href="{{ route('login' )}}">Iniciar sesión</a></li>
			<li><a href="{{ route('register' )}}">Registrarse</a></li>
			  @endif
        @endauth

      </ul>
	</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="{{ route('peliculas.index' )}}">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.png" alt=""></div>
						<div>CinemaJJE</div>
					</div>
				</a>	
      </div>
       
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
          @if (Route::has('login'))
@auth
@role('administrador')
          <a class="btn btn-success" href="adminalfredo">

            <i class="" aria-hidden="true"></i>Panel Administrador</a>               <p></p><li></li>
            @endrole
            
            <p href="{{ url('/home') }}" class="text-sm text-gray-700 underline">     <strong>Bienvenido</strong> {{ auth()->user()->name }}<p>
              <p></p><li></li>

            <a class="btn btn-md btn-danger" href="{{ route('logout' )}}">
             <i class="" aria-hidden="true"></i> Cerrar sesión</a><li></li>
             
             <a class="btn btn-md btn-info" href="{{ route('peliculas.index' )}}">
              <i class="" aria-hidden="true"></i> Volver</a><li></li>
                
                              @endauth
                     
                      @endif
                      <li></li>
                   
					
        </ul>
        
			</nav>
		
		</div>
	</header>

		<!-- Editar -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
					</div>
				</div>
				
          <div class="card-header">
         
<img  class="mx-auto d-block"src="/caratulas/{{ $pelicula->foto}}" />
</div>
</div>
<div class="jumbotron"></div>
<form method="POST"  action="{{ route('peliculas.update', $pelicula->id)}}"  enctype="multipart/form-data">
@csrf 
@method('PUT')

<label for="">Exclusivad</label>
<select class="form-control"  name="exclusividad" id="" required>
<option value="{{ $pelicula->exclusividad}}">{{ $pelicula->exclusividad}}</option>
<option value="si">Si</option>
  <option value="no">No</option>
 
</select>
</div>

<br></br>
<div>
<label for="">Nombre</label>
<input  class="form-control" type="text" value="{{ $pelicula->nombre}}" name="nombre" id="" required maxlength="40">
</div>
<div>
<br></br>
<label for="">Sinopsis</label>
<textarea class="form-control"  name="descripcion"  cols="30" rows="5"  id="" >{{ $pelicula->descripcion}}</textarea>
</div>
<br></br>

<div>
<label for="">Director</label>
<input  class="form-control"  value="{{ $pelicula->director}}" type="text" name="director" id="" required maxlength="25">
</div>
<br></br>

<div>
<label for="">Estudio</label>
<input class="form-control"  value="{{ $pelicula->estudio}}" type="text" name="estudio" id="" required maxlength="35">
</div>
<br></br>


<div>
<label for="">Genero</label>
<select class="form-control"  name="genero" id="" required>
<option value="{{ $pelicula->genero}}">{{ $pelicula->genero}}</option>
<option value="accion">Acción</option>
  <option value="infantil">Infantil</option>
  <option value="aventura">Aventura</option>
    <option value="cienciaficcion">Ciencia Ficción</option>
    <option value="comedia">Comedia</option>
  <option value="drama">Drama</option>
  <option value="romance">Romance</option>
    <option value="suspense">Suspense</option>
  <option value="terror">Terror</option>
    <option value="thriller">Thriller</option>
</select>
</div>

<br></br>

<div>
<label for="">Duración</label>
<input class="form-control" type="text"  value="{{ $pelicula->duracion}}" name="duracion" id="" required maxlength="4">
</div>
<br></br>
<div>
  <label for="">Precio</label>
  <input class="form-control"  type="text"  value="{{ $pelicula->precio}}" name="precio" id="" required maxlength="4">
  </div>
  <br></br>
<div>
<label for="">Trailer</label>
<input class="form-control"  type="text"  value="{{ $pelicula->trailer}}" name="trailer" id="" required maxlength="60">
</div>
<br></br>

<div>
  <label for="">Portada</label>
  <input accept="image/*" class="form-control"  type="file" name="file" id="file" >
  </div>
  <br></br>
  <br></br>

<input class="btn btn-primary" type="submit" value="Actualizar">
</form>
</div>
</html>
				<div class="row products_row">

        <!-- Product -->
				<div class="row load_more_row">
					<div class="col">
				</div>
		</div>
</div>


<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
@endsection
@extends('estilo.layout')
@section('title', 'VER')
@section('content')
<link href="{{ asset('styles/bootstrap-4.1.2/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
<link href="{{ asset('styles/main_styles.css') }}" rel="stylesheet">
<link href="{{ asset('styles/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('styles/comun.css') }}" rel="stylesheet">
<center>

    <section class="row">
    <h1 class="col-md-8"></h1>
    <div class="col-md-15" role="group">
           <p class="float-right">
               <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <section class="row">
    <h1 class="col-md-20"></h1>
    <div class="col-md-15" role="row">
           <p class="float-center">
           @role('administrador')
           <a class="btn btn-success" href="{{ route('peliculas.create' )}}">
    
               <i class="fa fa-plus" aria-hidden="true"></i> Panel Admin</a>       @endrole
               </div>
                            <ul><li><p href="{{ url('/home') }}" class="text-sm text-gray-700 underline">     <strong>Bienvenido</strong> {{ auth()->user()->name }}<p>
    </div></ul></li>
   
                        @else
                        <a class="btn btn-md btn-secondary" href="{{ route('login' )}}">
               <i class="fa fa-plus" aria-hidden="true"></i> Iniciar sesión</a>
                            @if (Route::has('register'))
                            <a class="btn btn-md btn-secondary" href="{{ route('register' )}}">
               <i class="fa fa-plus" aria-hidden="true"></i> Registrarse</a>                        @endif
                        @endauth
                    </div>
                @endif
               </p>
         </div>
    </section>
    
    
    <style>
    
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }
    
    /* Float four columns side by side */
    .column {
      float: right;
      width: 26%;
      padding: 30px 20px;
    }
    
    
    .padre {
  display: flex;
  justify-content: center;
}
.hijo {
  padding: 10px;
  margin: 10px;
  background-color: yellow;
}
    
    /* Responsive columns */
    @media screen and (max-width: 400px) {
      .column {
        width: 80%;
        display: grid;
        margin-bottom: 55px;
      }
    }
    
    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 15px;
      text-align: center;
      background-color: #f1f1f1;
    }
    
    button {
	font: 700 1em Tahoma, Arial, Verdana, sans-serif;
	color: #fff; background-color: #59B0E5;
	border: 1px solid #0074a5;
	border-top: 1px solid #004370;
	border-left: 1px solid #004370;
	cursor: pointer;
}

button {
	width: auto; /* ie */
	overflow: visible; /* ie */
	padding: 3px 8px 2px 6px; /* ie */
}

button[type] {
	padding: 4px 8px 4px 6px; /* firefox */
}
    </style>
    
    <div class="super_container">

	<!-- Header -->


<header class="header">
  <div class="header_overlay"></div>
  <div class="header_content d-flex flex-row align-items-center justify-content-start">
    <div class="logo">
      <a href="{{ route('peliculas.index' )}}"">
        <div class="d-flex flex-row align-items-center justify-content-start">
          <div><img src={{ asset('images/logo_1.png') }} alt=""></div>
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
                            @else
                            <li><a href=" {{ route('contacto.index' )}}">Contacto</a></li>
                            <li></li>	 <li></li> <li></li> <li></li> <li></li> <li></li> <li></li>
                            <a class="btn btn-md btn-secondary" href="{{ route('login' )}}">
                   <i class="" aria-hidden="true"></i> Iniciar sesión</a><li></li>
                                @if (Route::has('register'))
                                <a class="btn btn-md btn-secondary" href="{{ route('register' )}}">
                   <i class="" aria-hidden="true"></i> Registrarse</a>                        @endif
                            @endauth
                   
                    @endif
                    <li></li>
                 
        
      </ul>
      
    </nav>
		
		</div>
	</header>
    
    <h2> <div class="text-center"></h2></div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <br><br>
<h2> <div class="text-center">Cartelera CinemaJJE</h2></div>
            <div class="col-sm-5 align-self-center text-center">
                <div class="card shadow">
                    <div class="card-body">  
                         <!-- contacto -->

  <div class="card-header">Generador Tickets</div>

         <div class="card-body">
            @if (session('carrito'))
            <strong>Peliculas</strong>
            <table class="table table-striped">
            <thead>
                <th></th>

                <th>Nombre</th>
            <th>Entradas</th>
            <th>Precio</th>
            <th>Total</th>
            </thead>
            <tbody>


              @php
              $contador=0;
              $suma=0;
              @endphp

              @foreach (session('carrito') as $id=>$pelicula)
@php
      $subto=$pelicula['precio'];
      $subto=$pelicula['cantidad']*$pelicula['precio'];
      $suma=$suma+$subto;
      $contador++;
@endphp
          <tr>
                <td><img  class="img-thumbnail" src="/caratulas/{{ $pelicula['foto'] }}" height="30" alt="Imagen"/></td>
                <td>{{ $pelicula['nombre'] }}</td>
                <td>{{ $pelicula['cantidad'] }}</td>
              <td>{{ $pelicula['precio'] }}</td>
                <td>{{$pelicula['precio'] * $pelicula['cantidad'] }}</td>
                
                <div class="modal" id="exampleModal" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Proceder y eligir asiento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Selecciona tus asientos</p>
                          Para cambiar tu lugar asignado da click en el asiento deseado.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <a href="butaca" ><button type="button" class="btn btn-primary">Proceder</button>
                      </div>
                    </div>
                  </div>
                </div>
            </tr>
           
            @endforeach
            </tbody>
            <td>
              <div class="alert alert-success" role="alert">
                <div class="padre">
             <h4  class="hijo" class="alert-heading">Son $<?php echo number_format($suma , 2); echo("0 COP"); ?>
            </h4>

              </div>
            </div></div>

            </td>
            </table>
            <a href="/borrarcarrito" ><button type="submit" ><img src="images/del.png"  height="30px" width="30px" alt="x" />Vaciar cesta</button>
            </a>
            <button type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" name="B1"><span class="glyphicon glyphicon-shopping-cart"></span> Elegir asiento</button>

            @else
            <h2>No hay peliculas agregadas para generar</h2>
            @endif
        </div>
    </div> </div> </div> </div>
		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">
					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src={{ asset('images/icon_1.svg') }} alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Pagos rápidos y seguros</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src={{ asset('images/icon_2.svg') }} alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Medidas de seguridad COVID 19</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src={{ asset('images/icon_3.svg') }} alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Recibe tu boleto de entrada facilmente</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">

          <!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src={{ asset('images/logo_2.png') }} alt=""></div>
											<div>Cartelera CinemaJJE</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Todas las películas de cartelera y los horarios del CinemaJJE - UNIMINUTO</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Soporte</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Terminos y Condiciones</div></a>
									</li>
									<li>
										<a href=" {{ route('contacto.index' )}}"><div>Contacto</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
						
								<div class="footer_social">
									<div class="footer_title">Redes Sociales</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="https://twitter.com/josueromr"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Josué Romero
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="contacto">Contacto</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
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
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

<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">


<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/comun.css">

</head>
<body>

<!-- vista portatil o pequeñas pantallas ( mi portatil demoemtno) -->
<div class="menu">
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
      @if (Route::has('login'))
      @auth
      <li><strong>Bienvenido</strong> {{ auth()->user()->name }}
      <br><br>
      <li><a href="peliculas">Inicio</a></li>
	  @role('administrador')
	  <li><a href="adminalfredo">Panel Admin</a></li>
	  @endrole
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
				<li><a href="http://www.twitter.com/josueromr"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

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
				<a href="peliculas">
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

									 @else
                              <li><a href="contacto">Contacto</a></li>
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
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- login -->
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

		  <!-- Cart -->
				@if(session('carrito'))
				<div class="cart"><a href="/vercarrito"><div><img class="svg" src="images/cart.svg" alt=""><div>&nbsp;{{count(session('carrito'))}}</div></div></a></div>
				@endif
			</div>
		</div>
	</header>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Estrenos</div>
					</div>
				</div>

				<div class="row products_row">

          <!-- Product -->
          @forelse ($peliculas as $pelicula)
					<div class="col-xl-4 col-md-6">

						<div class="product">
							<div class="product_image"><a href="{{ route('peliculas.show', $pelicula->id)}}"><img src="/caratulas/{{ $pelicula->foto}}" alt=""></a></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="{{ route('peliculas.show', $pelicula->id)}}">{{ $pelicula->nombre}}</a></div>

										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_price"><p>Precio</p></div>
										<div class="product_price text-right">{{ $pelicula->precio}}<span></span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											@guest<div><div><a href="{{ route('peliculas.añadircarrito', $pelicula->id) }}"><img src="images/cart.svg" class="svg" alt=""></a><div>+</div></div></div>@endguest
											@role('cliente') <div><div><a href="{{ route('peliculas.añadircarrito', $pelicula->id) }}"><img src="images/cart.svg" class="svg" alt=""></a><div>+</div></div></div>@endrole
											@role('administrador') <form action="{{ route('peliculas.destroy', $pelicula->id)}}"  id="del" method="post">
												<a  class="btn btn-warning"  href="{{ route('peliculas.edit', $pelicula->id)}}">Modificar
												</a>
													 @csrf
													 @method('DELETE')
													  <button type="submit" class="btn btn-danger">Eliminar</button>
													 </form>@endrole
										</div>

	<script type="text/javascript">
      (function() {
        var form = document.getElementById('del');
        form.addEventListener('submit', function(event) {
          // si es false entonces que no haga el submit
          if (!confirm('Realmente desea eliminar esta pelicula?')) {
            event.preventDefault();
          }
        }, false);
      })();
    </script>
									</div>
								</div>
							</div>
						</div>
					</div>
          @empty
          <h3>No hay películas actualmente en el CinemaJJE</h3></div>
          @endforelse
				<div class="row load_more_row">
					<div class="col">
				</div>
		</div>
</div>


<br><br>

							<!-- Trailer-->

	<div class="lomasvendidocontenedor">
			<div class="section_title text-center">Cartelera</div>
			<br>
					<div class="lomasvendido owl-carousel owl-theme">

					<!-- item-->
		          @forelse ($peliculas as $pelicula)

							<div class="">
									<div class="product">
										<div class="product_image"><img src="/caratulas/{{ $pelicula->foto}}" alt=""></div>
										<div class="product_content">
											<div class="product_info d-flex flex-row align-items-start justify-content-start">
												<div>
													<div>
														<div class="product_name"><a href="product.html">{{ $pelicula->nombre}}</a></div>

													</div>
												</div>
												<div class="ml-auto text-right">
                          <div class=" product_price"><p>Precio</p></div>
                          <div class="product_price text-right">{{ $pelicula->precio}}<span></span></div>
												</div>
											</div>
											<div class="product_buttons">
												<div class="text-right d-flex flex-row align-items-start justify-content-start">
													<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
														<div><div><a href="{{ route('peliculas.añadircarrito', $pelicula->id) }}"><img src="images/cart.svg" class="svg" alt=""></a><div>+</div></div></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                @empty
                <h3>No hay películas actualmente en el CinemaJJE</h3></div>
                @endforelse
						</div>
					</div>
			</div>
		</div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">
					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
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
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
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
								<div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Recibe tu ticket de entradas facilmente</div>
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
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Cartelera CinemaJJE</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Todas las películas de Cartelera y los horarios del CinemaJJE - UNIMINUTO</p>
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
										<a href="/contacto"><div>Contacto</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Mantente en contacto</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Suscríbete a nuestro boletín" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
@endsection

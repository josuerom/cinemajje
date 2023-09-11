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

    .compra {
    text-align: center;
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
                      </div>
                    </div>
                  </div>
                </div>
            </tr>
            @endforeach
            </tbody>
            <td>
              <div  class="compra">
              <div class="alert alert-warning" role="alert">

             <h4 class="alert-heading">Escoge tu sitio </h4>

            <img src="images/butaca.png"  usemap="#image-map">

            <map name="image-map">
                <area target="_blank" alt="numero14a" title="numero14a" href="14a" coords="70,75,37,47" shape="rect">
                <area target="_blank" alt="numero14b" title="numero14b" href="14b" coords="69,138,39,109" shape="rect">
                <area target="_blank" alt="numero14c" title="numero14c" href="14c" coords="70,202,38,175" shape="rect">
                <area target="_blank" alt="12a" title="12a" href="12a" coords="116,75,82,48" shape="rect">
                <area target="_blank" alt="12b" title="12b" href="12b" coords="119,137,80,111" shape="rect">
                <area target="_blank" alt="12c" title="12c" href="12c" coords="79,176,115,201" shape="rect">
                <area target="_blank" alt="10c" title="10c" href="10c" coords="158,169,124,144" shape="rect">
                <area target="_blank" alt="10b" title="10b" href="10b" coords="123,82,157,106" shape="rect">
                <area target="_blank" alt="10a" title="10a" href="10a" coords="155,40,120,18" shape="rect">
                <area target="_blank" alt="8a" title="8a" href="8a" coords="166,17,200,40" shape="rect">
                <area target="_blank" alt="8b" title="8b" href="8b" coords="166,80,197,105" shape="rect">
                <area target="_blank" alt="8c" title="8c" href="8c" coords="196,167,167,143" shape="rect">
                <area target="_blank" alt="6a" title="6a" href="6a" coords="207,47,248,73" shape="rect">
                <area target="_blank" alt="6b" title="6b" href="6b" coords="206,142,243,169" shape="rect">
                <area target="_blank" alt="4a" title="4a" href="4a" coords="258,14,285,40" shape="rect">
                <area target="_blank" alt="4b" title="4b" href="4b" coords="257,111,285,134" shape="rect">
                <area target="_blank" alt="4c" title="4c" href="4c" coords="254,173,284,200" shape="rect">
                <area target="_blank" alt="2a" title="2a" href="2a" coords="300,17,329,39" shape="rect">
                <area target="_blank" alt="2b" title="2b" href="2b" coords="299,114,329,136" shape="rect">
                <area target="_blank" alt="2c" title="2c" href="2c" coords="301,178,329,200" shape="rect">
                <area target="_blank" alt="1a" title="1a" href="1a" coords="343,46,374,73" shape="rect">
                <area target="_blank" alt="1b" title="1b" href="1b" coords="343,142,377,168" shape="rect">
                <area target="_blank" alt="3a" title="3a" href="3a" coords="387,15,420,41" shape="rect">
                <area target="_blank" alt="3b" title="3b" href="3b" coords="385,79,421,105" shape="rect">
                <area target="_blank" alt="3c" title="3c" href="3c" coords="388,142,419,170" shape="rect">
                <area target="_blank" alt="5a" title="5a" href="5a" coords="432,15,464,41" shape="rect">
                <area target="_blank" alt="5b" title="5b" href="5b" coords="430,79,466,104" shape="rect">
                <area target="_blank" alt="5c" title="5c" href="5c" coords="432,143,463,167" shape="rect">
                <area target="_blank" alt="7a" title="7a" href="7a" coords="474,47,507,73" shape="rect">
                <area target="_blank" alt="7b" title="7b" href="7b" coords="477,112,507,137" shape="rect">
                <area target="_blank" alt="7c" title="7c" href="7c" coords="474,175,509,199" shape="rect">
                <area target="_blank" alt="9a" title="9a" href="9a" coords="519,46,553,73" shape="rect">
                <area target="_blank" alt="9b" title="9b" href="9b" coords="520,111,554,136" shape="rect">
                <area target="_blank" alt="9c" title="9c" href="9c" coords="520,175,553,203" shape="rect">
            </map>

              </div>
            </div>

            </td>
            </table>
            <a href="/borrarcarrito" ><button type="submit" ><img src="images/del.png"  height="30px" width="30px" alt="x" />Vaciar cesta</button>
            </a>
            <a href="checkout" ><button type="submit"  class="btn btn-primary" name="B1"><span class="glyphicon glyphicon-shopping-cart"></span> Realizar pedido</button>
            <a href="/vercarrito" > <button type="submit"  class="btn btn-danger" name="B1"></span> Volver</button>
            </a>
            @else
            <h2>No hay productos en el carrito</h2>
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
											<div class="footer_logo_icon"><img src={{ asset('images/logo_2.png') }} alt=""></div>
											<div>Cartelera CinemaJJE</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Todas las películas de cartelera y los horarios del CinemaJJEW - UNIMINUTO 2023</p>
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

@extends('layouts.admin')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin CinemaJJE</title>
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Centro de Control</h1>
            <strong><h2 class="m-5 text-dark">Bienvenido {{ auth()->user()->name }}</h2></strong>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $count3 }}</h3>

                <p>Tickets</p>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $count }}</h3>

                <p>Usuarios registrados</p>
              </div>
              <a href="adminalfredo/clientes" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">

 <!-- small box -->
 <div class="small-box bg-dark mb-3">
  <div class="inner">
    <h3>{{ $count2 }}</h3>

    <p>Películas en el Sistema</p>
  </div>

  <a href="adminalfredo/cartelera" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<div class="col-lg-3 col-6">


            <!-- small box -->
            <div class="small-box bg-light mb-3">
              <div class="inner">

                <p><strong>Visualizar web</strong></p>
              </div>
              <a href="peliculas" class="small-box-footer">Ver web <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

   <!-- small box -->
   <div class="small-box bg-danger">
    <div class="inner">
      <a href="logout" class="small-box-footer"><img  width="70px" height="89px" src="images/logout.png" /></a>
    </div>
    @if (Route::has('login'))
    @auth
    <a href="logout" class="small-box-footer">Salir <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>

    @endif
    @endauth
</body>
</html>

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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<h1> Añadir una pelicula</h1>
<form method="post" action="{{ route('peliculas.store') }}">
@csrf

<div>
<label for="">Nombre</label>
<input  class="form-control" type="text" name="nombre" id="" required maxlength="40">
</div>
<div>
<br></br>
<label for="">Sinopsis</label>
<textarea class="form-control"  name="descripcion"  cols="30" rows="5"  id="" ></textarea>
</div>
<br></br>

<div>
<label for="">Director</label>
<input  class="form-control"  type="text" name="director" id="" required maxlength="25">
</div>
<br></br>

<div>
<label for="">Estudio</label>
<input class="form-control"  type="text" name="estudio" id="" required maxlength="35">
</div>
<br></br>


<div>
<label for="">Genero</label>
<select class="form-control"  name="genero" id="" required>
<option value="">Seleccione un genero</option>
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
<input class="form-control" type="text" name="duracion" id="" required maxlength="4">
</div>
<br></br>

<div>
<label for="">Trailer</label>
<input class="form-control"  type="text" name="trailer" id="" required maxlength="60">
</div>
<br></br>

<div>
<label for="">Portada</label>
<input class="form-control"  type="text" name="portada" id="" required maxlength="60">
</div>
<br></br>
<br></br>


<input class="btn btn-primary" type="submit" value="Añadir Pelicula">
</form>
</body>
</html>
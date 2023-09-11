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


          @forelse ($peliculas as $pelicula)

         <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Película</th>
              <th scope="col">Portada</th>
              <th scope="col">Género</th>
              <th scope="col">Tráiler</th>
              <th scope="col">Exclusividad</th>
              <th scope="col"><strong>Permisos</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ $pelicula->nombre}}</th>
              <td><img  width="160px" height="225px" src="/caratulas/{{ $pelicula->foto}}"/></td>
              <td>{{ $pelicula->genero}}</td>
              <td><IFRAME SRC="{{ $pelicula->trailer}}" ></IFRAME></td>
              <td>{{ $pelicula->exclusividad}}</td>
              <td><form action="{{ route('peliculas.destroy', $pelicula->id)}}" id="del" method="post">
                <a  class="btn btn-warning"  href="{{ route('peliculas.edit', $pelicula->id)}}">Modificar
                </a>
                   @csrf
                   @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                   </form></td>

                   <script type="text/javascript">
      (function() {
        var form = document.getElementById('del');
        form.addEventListener('submit', function(event) {
          // si es false entonces que no haga el submit
          if (!confirm('Realmente desea eliminar?')) {
            event.preventDefault();
          }
        }, false);
      })();
    </script>
            </tr>
          </tbody>
        </table>
          @empty
          <h3>No hay películas en la base de datos</h3></div>
          @endforelse
</body>
</html>
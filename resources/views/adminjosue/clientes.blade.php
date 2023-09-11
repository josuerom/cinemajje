@extends('layouts.admin')
@extends('auth.register')

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

          @forelse ($usuarios as $usuario)

         <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ $usuario->name}}</th>
              <td>{{ $usuario->email}}</td>
            </tr>
          </tbody>
        </table>
          @empty
          <h3>No hay usuarios</h3></div>
          @endforelse
</body>
</html>
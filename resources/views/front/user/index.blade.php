@extends('front.template')

@section('pageTitle', 'Perfil del usuario')

@section('mainContent')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <br>
      <h2>Hi "Nombre del usuario"</h2>
      <img src="data/avatars" alt="imagen usuario">
      <br><br>
      <a href="#" class="btn btn-info"></a>
      <hr>
      <a class="btn-success" href="log-out.php">Cerrar Sesión</a>
    </div>
  </div>
</div>
@endsection

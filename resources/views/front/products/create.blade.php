@extends('front.template')

@section('pageTitle', 'Crear un producto')

@section('mainContent')
	<h2>Formulario para crear productos</h2>

	<form action="/products" method="post">
		@csrf
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label>Nombre del producto</label>
					<input
						type="text"
						name="name"
						value=""
						class="form-control"
					>
				</div>
			</div>
      <br>
      <br>
			<div class="col-12">
				<div class="form-group">
					<label>Descripción</label>
					<input
						type="text"
						name="description"
						value=""
						class="form-control"
					>

				</div>
        <br>
        <div class="col-12">
          <div class="form-group">
            <label>Precio</label>
            <input
              type="text"
              name="price"
              value=""
              class="form-control"
            >

          </div>
          <br>
          <div class="col-12">
            <div class="form-group">
              <label>Colores</label>
              <select class="form-control" name="color">
                @foreach ($colors as $color)
                  <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
              </select>
            </div>
            <br>
            </div>
			</div>



			<div class="col-12">
				<button type="submit" class="btn btn-success">ENVIAR</button>
			</div>
		</div>
	</form>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

@endsection

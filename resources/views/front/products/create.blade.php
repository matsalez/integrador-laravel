@extends('front.template')

@section('pageTitle', 'Crear un producto')

@section('mainContent')
	<h2>Formulario para crear productos</h2>

	<form action="/products" method="post">
	</form>

	<form action="/products" method="post">
		@csrf
		<div class="row" >
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
              <label>Colores: </label>
              <p class="form-control" name="color">
                @foreach ($colors as $color)
                  <input type="checkbox" name="colors[]" value="{{ $color->id }}">{{ $color->name }}
									<br>
								@endforeach

              </p>
            </div>
            <br>
            </div>
						<div class="col-12">
	            <div class="form-group">
	              <label>Talles: </label>
	              <p class="form-control" name="color">
	                @foreach ($sizes as $size)
	                  <input  type="checkbox" name="sizes[]" value="{{ $size->id }}">{{ $size->name }}
	                @endforeach
	              </p>
	            </div>
							<div class="col-12">
								<div class="form-group">
									<label>Categorias: </label>
									<select class="form-control" name="category">
										@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
								</div>
	            <br>
	            </div>
			</div>



			<div class="col-12">
				<button type="submit" class="btn btn-success">ENVIARRRRRRR</button>
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

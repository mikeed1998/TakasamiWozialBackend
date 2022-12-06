@extends('layouts.admin')

@section('cssExtras')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
	<style media="screen">
		.cat{
			font-size: 1.3em;
		}
	</style>
	<div class="row mb-4 px-2">
		<a href="{{ route('productos.show',$cat_update) }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
	<div class="d-flex">
	<div class="col-12  mx-auto">
		<div class="card">
			<div class="card-body">
				<form method="post" action="{{route('productos.categorias.subida')}}" >
					@csrf
					{{-- @method('PUT') --}}
					<div class="row text-center">
						{{-- <div class="col-md">
							<label for="clave">SKU</label>
							<input type="text" name="clave" id="clave" class="form-control" value="{{ old('clave') }}" required>
						</div> --}}
						<div class="col-md form-group">
							<label for="nombre">Nombre de categoria</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="{{$cat->nombre}}" required>
							<input type="text" name="parent" id="parent" class="form-control" value="{{$cat_update}}" required hidden>
						</div>
					{{-- </div>
					<div class="form-group row text-center"> --}}

						{{-- <div class="col-md form-group">
							<label for="categoria">Categoria</label>
							<select name="categoria" id="categoria" class="custom-select">
								<option disabled selected>Seleccionar Categoria</option>
								@foreach ($categParent as $parent)
									<option value="{{$parent->id}}">{{ $parent->nombre }}</option>
								@endforeach
							</select>
						</div> --}}
					</div>
					<div class="text-center">
						<button type="" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

@endsection



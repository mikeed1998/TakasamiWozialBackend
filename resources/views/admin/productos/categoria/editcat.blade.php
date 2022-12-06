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
		<a href="{{ route('productos.show',$subcat->id_prod) }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
	<div class="d-flex">
	<div class="col-12  mx-auto">
		<div class="card">
			<div class="card-body">
				<form method="post" action="{{route('productos.categorias.savecat')}}">
					@csrf
					{{-- @method('PUT') --}}
					<div class="row text-center">
						{{-- <div class="col-md">
							<label for="clave">SKU</label>
							<input type="text" name="clave" id="clave" class="form-control" value="{{ old('clave') }}" required>
						</div> --}}
						<div class="col-12 form-group">
							<label for="nombre">Nombre de categoria</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="{{$subcat->nombre}}" required>
							<input type="text" name="id" id="parent" class="form-control" value="{{$subcat->id}}" required hidden>
						</div>
						<div class="col-12 form-group">
							<label for="nombre">Descripcion</label>
							<textarea type="text" name="descripcion" id="descripcion" class="form-control" value="" required>{!!$subcat->descripcion!!}</textarea>
						</div>
						<div class="col-12 form-group">
							<label for="nombre">Subtitulo</label>
							<input type="text" name="subtitulo" id="subtitulo" class="form-control" value="{{$subcat->subtitulo}}" required>
						</div>
						<div class="col-12 form-group">
							<label for="nombre">Sub descripcion</label>
							<textarea type="text" name="sub_desc" id="sub_desc" class="form-control" value="" required>{!!$subcat->sub_descripcion!!}</textarea>
						</div>
					</div>
					
					{{--<div class="form-group row text-center"> --}}

						{{-- <div class="col-md form-group">
							<label for="categoria">Categoria</label>
							<select name="categoria" id="categoria" class="custom-select">
								<option disabled selected>Seleccionar Categoria</option>
								@foreach ($categParent as $parent)
									<option value="{{$parent->id}}">{{ $parent->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>--}}
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



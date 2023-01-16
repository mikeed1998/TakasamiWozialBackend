@extends('layouts.admin')

{{-- @section('cssExtras') @endsection --}}

{{-- @section('jsLibExtras') @endsection --}}

@section('styleExtras')
	<style media="screen">
		.custom-switch{text-align: center !important;}
	</style>
@endsection
@section('content')
<?php // NOTE: agregar data table ?>
	<div class="col-12 px-0 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-sm">
						<thead>
							<th style="">Carrusel</th>
							<th class="text-center" style="width: 4rem;">Opciones</th>
						</thead>
							<tbody data-table="Producto">
								<tr>
									<td class="align-middle">
										<a href="{{route('cont.apoyo')}}">
											Software de apoyo
										</a>
									</td>
									<td class="align-middle">
										<div class="dropdown text-right">
											<a href="" class="btn btn-link btn-sm dropdown py-0" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="{{route('cont.apoyo')}}"><i class="far fa-fw fa-edit"></i> Editar</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="align-middle">
										<a href="{{route('cont.alianza')}}">
											Nuestras alianzas
										</a>
									</td>
									<td class="align-middle">
										<div class="dropdown text-right">
											<a href="" class="btn btn-link btn-sm dropdown py-0" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="{{route('cont.alianza')}}"><i class="far fa-fw fa-edit"></i> Editar</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="align-middle">
										<a href="{{route('cont.alianza')}}">
											novo
										</a>
									</td>
									<td class="align-middle">
										<div class="dropdown text-right">
											<a href="" class="btn btn-link btn-sm dropdown py-0" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="{{route('cont.alianza')}}"><i class="far fa-fw fa-edit"></i> Editar</a>
											</div>
										</div>
									</td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#ipdel").val(id);
			});

			$('.delsize').click(function(e) {
				$('#tamdel').submit();
			});
		});
	</script>
@endsection

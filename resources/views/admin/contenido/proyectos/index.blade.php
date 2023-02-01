@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
@endsection

@section('styleExtras')
	<style>
	.card-gallery{
		height: 11rem;
		object-fit: cover;
		border-radius: 50%;
	}
	#variantes tbody tr td{
    vertical-align: middle;
		margin-left: 1em;
	}
</style>
@endsection

@section('jsLibExtras')
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Proyectos</h2>
        </div>
        <div class="pull-right" style="margin-bottom:10px;">
        <a class="btn btn-success" href="{{ route('cont.proyectos.create') }}"> Añadir otro proyecto </a>
        </div>
    </div>
</div>
 
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Imágen</th>
        <th>Logo</th>
        <th>Titulo</th>
        <th>Descripción</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($categorias as $cat)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/img2/photos/proyectos/{{ $cat->imagen }}" width="100px"></td>
        <td><img src="/img2/photos/proyectos/logos/{{ $cat->logo }}" width="100px"></td>
        <td>{{ $cat->titulo }}</td>
        <td>{{ $cat->descripcion }}</td>
        <td>
            <form action="{{ route('cont.proyectos.destroy',$cat->id) }}" method="POST">
  
                <a class="btn btn-info" href="{{ route('cont.proyectos.show',$cat->id) }}">Show</a>
   
                <a class="btn btn-primary" href="{{ route('cont.proyectos.edit',$cat->id) }}">Edit</a>
  
                @csrf
                @method('DELETE')
     
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
 
{!! $categorias->links() !!}
 
@endsection

@section('jsLibExtras2')
    <script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('js/jquery-file-upload.js')}}"></script>
@endsection

@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function(){

			$('.select2').select2();
			var drEvent = $('.dropify').dropify({

			// $('.dropify').dropify({
				messages: {
					'default': 'Arrastrar y soltar un archivo aquí o hacer clic',
					'replace': 'Arrastrar y soltar o hacer clic para reemplazar',
					'remove': 'Remover',
					'error': 'Ooops, algo malo pasó.'
				},
				error: {
	        'fileSize': 'El tamaño del archivo es demasiado grande (@{{ value }} máximo)',
	        'minWidth': 'El ancho de la imagen es demasiado pequeño (@{{ value }}}px min).',
	        'maxWidth': 'El ancho de la imagen es demasiado grande (@{{ value }}}px máximo).',
	        'minHeight': 'La altura de la imagen es demasiado pequeña (@{{ value }}}px min).',
	        'maxHeight': 'La altura de la imagen es demasiado grande (@{{ value }}px max).',
	        'imageFormat': 'El formato de la imagen no está permitido (@{{ value }} solamente).'
				}
			});

			$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#ipdel").val(id);
			});

			$('.delphoto').click(function(e) {
				$('#photodel').submit();
			});

				$("#fileuploader").uploadFile({	
				url:"{{route('cont.store',1)}}",
				multiple: true,
				maxFileCount:10,
				fileName:"uploadedfile",
				allowedTypes: "jpg,jpeg,png",
				maxFileSize: 10485760,
				showFileCounter: false,
				showDelete: "false",
				showPreview:false,
				showQueueDiv:true,
				returnType:"json",
				formData: {
					"_token": $("meta[name='csrf-token']").attr("content"),
					"producto": ""
				},
				onSuccess:function(files,data,xhr){
					location.reload();
				}
			});
		});
	</script>
@endsection

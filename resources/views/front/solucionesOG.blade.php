@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
    
@endsection
@section('styleExtras')
<style>
.cover_head{
  background-image: url("{{asset("img/design/img_9.png")}}");
  background-size:cover;
  background-repeat: no-repeat;
}

</style>
  

@endsection
@section('content')

<div class="cover_head col-12 d-flex conteiner-fluid align-items-center" style="padding-top: 150px">
	<div class="row d-flex align-items-center">
	    <div class="col-md-1"></div>
		<div class="col-md-4 d-flex">
			<img class="hide_hombre" src="{{asset("img/photos/seccions/".$elementos[0]->imagen)}}">
		</div>
		<div class="col-md-5 col-12 col-ls-5 mx-1">
			<h2 class="resp_title" style="font-size: 50px; font-weight: lighter; color: white;">{{$product->nombre}}</h2>
			<div style="font-weight: lighter; color: white;">{!!$product->descripcion!!}</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color: white">
<div class="container-fluid my-3" style="background-color: black;">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-md-9 col-12 pt-5">
			<h2 style="font-size: 50px; font-weight: lighter; color: white;">{{$relcat->nombre}}</h2>
		</div>
		<div class="col-2"></div>
		<div class="col-1"></div>
		<div class="col-md-9 col-12">
			<p style="font-weight: lighter; color: white;">{{$relcat->descripcion}}</p>
		</div>
		<div class="col-2"></div>
		<div class="col-1"></div>
		<div class="col-md-9 col-12">
			<h2 style="font-size: 50px; font-weight: lighter; color: white;">{{$relcat->subtitulo}}</h2>
		</div>
		<div class="col-2"></div>
		<div class="col-1"></div>
		<div class="col-md-9 col-12">
			<p style="font-weight: lighter; color: white;">{{$relcat->sub_descripcion}}</p>
		</div>
		<div class="col-2"></div>
		<div class="col-1"></div>
		<div class="col-md-9 col-12" style="margin-bottom: 50px">
      <a href="https://wa.me/{{$config->whatsapp}}?text=Hola! estoy interesado en contactarlos." class="btn btn-primary align-items-end btn_gde" style="padding-top: auto; padding-bottom: auto; ">agendar</a>            
		</div>
		<div class="col-2"></div>
	</div>
</div>
</div>

@endsection



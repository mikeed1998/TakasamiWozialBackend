@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
    
@endsection
@section('styleExtras')

@endsection
@section('content')

<div style="background-color: black; padding-top: 200px">
<div class="container-fluid pb-5">
    <div class="row form_resp">
        <div class="col-md-1"></div>
        <div class="col-md-5 col-12">
            <h2 style="font-size: 60px; font-weight: lighter; color: white;">Estamos pendientes de ti...</h2>
        </div>
        <div class="col-6"></div>
        
        <div class="col-md-1"></div>
        <div class="col-md-5 col-12 pt-4">
            <div style="text-align: center; color: rgb(199, 199, 199); padding-left: 10px; padding-right: 10px">{!!$elementos[0]->texto!!}</div>
        </div>
        <div class="col-lg-6"></div>
        
        <div class="col-md-1"></div>
        <div class="col-12 col-md-5 pt-3">
            <form style="border-color: white;" action="{{route('formularioContac')}}" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4 px-1 py-2">
                            <input type="text" class="bd-highlight form-control" placeholder="Nombre:" name="nombre" style="background: none; height: 50px; color: white;" value="">
                        </div>
                        <div class="col-12 col-md-4 px-1 py-2">           
                            <input type="text" class="bd-highlight form-control" placeholder="Whatsapp:" name="telefono" style="background: none; height: 50px; color: white" value="">
                        </div>
                        <div class="col-12 col-md-4 px-1 py-2">
                            <input type="text" class="bd-highlight form-control" placeholder="Correo:" name="correo" style="background: none; height: 50px; color: white" value="">
                        </div>
                        <div class="col-12 px-1 pt-1 pb-3">
                            <input type="text" class="form-control" name="mensaje" style="background: none; height: 50px; color: white" value="">
                        </div>
                    <br>
                    <div style="text-align: center; padding-top: 5px;">
                    <button type="submit" class="btn btn-primary align-items-end btn_gde pt-2">enviar</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 px-5" style="text-align: right; color: white; display: flex; align-items: end; justify-content: end;">
            <p>{{$data->direccion}} <br>{{$data->destinatario}} <br>{{$data->telefono}}</p>
        </div>
    </div>
</div>

<div class="container-fluid" >
    {!!$data->mapa!!}
</div>
</div>

@endsection


@extends('layouts.front')

@section('title')
    {{ 'Titulo' }}
@endsection

@section('cssExtras')
@endsection

@section('styleExtras')
@endsection

@section('content')

<div class="container-fluid py-5 border px-5">
    <div class="row py-5">
        <div class="col py-5">
            <div class="card">
                <div class="image col-md-6 col-xs-12 p-0 d-flex justify-content-center align-items-end" style="width: 600px; height: 600px; background-image: url({{ asset('img/design/TKSHome_47.png') }}); background-size: cover;">
                    <div class="d-flex mt-5 align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                        <img class="img-fluid" src="{{ asset('img/design/TKSHome_62.png') }}" alt="" style="background-size: cover;">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <h3>EQUIPO</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center">
                            <hr style="border: 3px solid black;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro earum optio vero molestias rem, soluta harum deserunt molestiae magni!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 border px-5">  
    <div class="row py-5">
        <div class="col py-5">
            <div class="image col-md-6 col-xs-12 py-5 d-flex justify-content-center align-items-end" style="width: auto; height: 1000px; background-image: url({{ asset('img/design/TKSHome_07.png') }}); background-size: cover;">
                <div class="d-flex mb-5 align-items-center justify-content-center">
                    <a href="" class="btn btn-lg btn-outline bg-white py-3 px-3 shadow-lg"><h4 class="p-0 m-0">SABER MÁS</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jsLibExtras2')
@endsection


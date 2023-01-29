@extends('layouts.front')

@section('title')
    {{ 'Soluciones' }}
@endsection

@section('cssExtras')
@endsection

@section('styleExtras')
@endsection

@section('content')

<div class="container-fluid px-5">
    <div class="row" style="background-color: #F7F0EB;">
        <div class="col py-5">
            <div class="row">
                <div class="col-md-4 border">
                    <img src="{{ asset('img/photos/seccions/'.$elementos[1]->imagen) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 px-5">
                    <div class="row mt-5 py-5">
                        <div class="col-11 mx-auto">
                            <p class="display-2">Soluciones</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: justify;">
                            <p>{!! $elementos[0]->texto !!}</p>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col text-end">
                            <img src="{{ asset('img/design/TKSHome_03_02.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto border text-center py-3">
            <img src="{{ asset('img/photos/seccions/'.$elementos[2]->imagen) }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

@endsection

@section('jsLibExtras2')
@endsection

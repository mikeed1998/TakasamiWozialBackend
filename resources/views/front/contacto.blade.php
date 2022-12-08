@extends('layouts.front')

@section('title')
    {{ 'Contacto' }}
@endsection

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
    
@endsection
@section('styleExtras')

@endsection

@section('content')

<div class="container-fluid px-5">
    <div class="row mb-5" style="background-color: #F7F0EB;">
        <div class="col">
            <div class="row py-5">
                <div class="col py-5">
                    <div class="row py-5">
                        <div class="col-12 py-3 text-center">
                            <img src="{{ asset('img/design/contact.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 mx-auto" style="text-align: justify;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid provident libero eligendi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio hic ut earum culpa saepe omnis. Dolorum a quisquam illo alias doloremque magni enim veniam, reprehenderit necessitatibus quia atque ad vel.
                        </div>
                    </div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Correo">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Whatsapp">
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col">
                                        <textarea class="form-control border border-dark" name="" id="" cols="30" rows="10" style="background-color: #F7F0EB; height: 100px;  font-size: 24px;"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mx-auto text-center">
                                        <!-- <input type="submit" class="form-control btn border border-dark py-2" value="ENVIAR" style="font-size: 30px;"> -->
                                        <button type="submit" class="form-control btn border border-dark py-2" style="font-size: 20px;">
                                            ENVIAR <i class="carga fa fa-spinner fa-spin"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3 px-5">
                    <div class="row">
                        <div class="col py-3">
                            <img src="{{ asset('img/design/nosotros.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Avenida lapizlazuli 2074 int 3 <br>
                            Residencial Victoria, Zapopan jalisco. <br>
                            Tel. 3338096501 <br><br>
                            <a href="#" class="text-dark" style="text-decoration: none;">
                                <i class="fa-brands fa-whatsapp fa-lg px-2"></i>
                            </a>
                            <a href="#" class="text-dark" style="text-decoration: none;">
                                <i class="fa-brands fa-facebook-f fa-lg px-2"></i>
                            </a>
                            <a href="#" class="text-dark" style="text-decoration: none;">
                                <i class="fa-brands fa-instagram fa-lg px-2"></i>
                            </a>
                            <a href="#" class="text-dark" style="text-decoration: none;">
                                <i class="fa-solid fa-location-dot fa-lg px-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


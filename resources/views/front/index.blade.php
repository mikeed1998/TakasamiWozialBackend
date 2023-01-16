@extends('layouts.front')

{{-- @section('title', 'Inicio') --}}
@section('title')
    {{ 'Home' }}
@endsection

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">

	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection
@section('styleExtras')

@endsection
@section('content')

    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-12 px-1">
                <div class="row position-relative">
                    <div class="col position-absolute px-2">
                        <div class="aux3"><br><br></div>
                        <div id="carrusel" class="">
                            <div class="" id="slider_pri">
                                @foreach($slider as $ite)
                                <div>
                                    <div class="col-md-6 col-xs-12 py-5 d-flex justify-content-center align-items-end" style="width: auto; height: auto; background-image: url({{asset("/img/photos/productos/".$ite->image)}}); background-size: cover;">
                                        <div class="auxm"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                        <div class="d-flex mb-5 align-items-center justify-content-center">
                                            <a href="#" class="btn btn-lg btn-outline bg-white py-3 px-3 shadow-lg"><h4 class="p-0 m-0">SABER MÁS</h4></a>
                                        </div>  
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{-- <div>
                                <div class="col-md-6 col-xs-12 py-5 d-flex justify-content-center align-items-end" style="width: auto; height: auto; background-image: url({{ asset('img/design/TKSHome_07.png') }}); background-size: cover;">
                                    <div class="auxm"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                    <div class="d-flex mb-5 align-items-center justify-content-center">
                                        <a href="#" class="btn btn-lg btn-outline bg-white py-3 px-3 shadow-lg"><h4 class="p-0 m-0">SABER MÁS</h4></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="aux3"><br><br><br><br><br><br><br><br><br><br></div>
                    <div id="aux2"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    </div>
                    <div class="row mb-5 mt-5 px-0 py-5 position-relative">
                        <div class="col-sm-12 col-md-6 col-lg-6 py-5 mt-5">
                            <div class="aux">
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                            <div class="row mt-5 py-5">
                                <div class="col-sm-12 col-md-9 col-lg-9 mt-5 mb-1 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_14.png') }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 mx-auto" style="text-align: justify;">
                                    <p>{!! $elementos[1]->texto !!}</p>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-sm-12 col-md-9 col-lg-4 mx-auto text-center">
                                    <a href="{{ url('proyectos') }}" class="btn btn-outline border border-dark btn-lg py-2 px-4" style="font-size: 20px;">SABER MÁS <i class="carga fa fa-spinner fa-spin"></i></a>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 text-end mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ asset('img/design/TKSHome_03_01.png') }}" alt="img-fluid" width="20%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: #F7F0EB">
                            <div class="row">
                                <div class="col text-center">
                                    <img src="{{ asset('img/photos/seccions/'.$elementos[2]->imagen)}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mt-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4 mt-5 mx-auto text-center">
                                    <img src="{{ asset('img/design/TKSHome_19.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-2 col-lg-2 mx-auto text-center px-0">
                                    <hr style="border: 3px solid black;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-lg-6 mx-auto text-center">
                                    <p>{!! $elementos[3]->texto !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-9 mx-auto">
                                <div class="" id="carrusel_logos">
                                @foreach($carrusel as $item)
                                    <div class="d-flex justify-content-center">
                                        <img src="{{asset("/img/photos/productos/".$item->image)}}" style="max-width: 165px">
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    {{-- <div class="row mt-5 px-5">
                        <div class="col-sm-12 col-md-9 col-lg-12 mx-auto">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-2 py-3 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_26.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 py-3 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_29.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 py-3 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_35.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 py-3 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_23.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 py-3 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_32.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mt-5 py-5" style="background-color: #F7F0EB">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-9 col-lg-4 mt-5 mx-auto py-3">
                                    <img src="{{ asset('img/design/TKSHome_43.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-9 col-lg-6 mx-auto text-center">
                                    <p>{!! $elementos[5]->texto !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="row">
                                        <div class="col px-0">
                                            <div class="card">
                                                <div class="image col-md-6 col-xs-12 p-0 d-flex justify-content-end align-items-end" style="width: 600px; height: 600px; background-image: url({{ asset('img/design/TKSHome_47.png') }}); background-size: cover;">
                                                    <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
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
                                        <div class="col px-0">
                                            <div class="card">
                                                <div class="col-md-6 p-0 d-flex justify-content-end align-items-end" style="width: 600px; height: 600px; background-size: cover; background-image: url({{ asset('img/design/TKSHome_49.png') }});">
                                                    <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                                                        <img class="img-fluid" src="{{ asset('img/design/TKSHome_59.png') }}" alt="">
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
                                        <div class="col px-0">
                                            <div class="card">
                                                <div class="col-md-6 p-0 d-flex justify-content-end align-items-end" style="width: 600px; height: 600px; background-size: cover; background-image: url({{ asset('img/design/TKSHome_51.png') }});">
                                                    <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                                                        <img class="img-fluid" src="{{ asset('img/design/TKSHome_56.png') }}" alt="">
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
                            </div>
                        </div>
                    
                    <div class="row mt-5 py-5">
                        <div class="col-sm-12 col-md-12 py-5" style="background-color: #F7F0EB">
                            <div class="row py-5">
                                <div class="col-sm-12 col-md-9 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_68.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-9 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_72.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-sm-12 col-md-9 mx-auto text-center">
                                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloribus. Veniam alias voluptate dolore est cum recusandae dignissimos porro sunt ipsum dolorum, doloribus vero, reprehenderit aspernatur, hic unde repudiandae minus!
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 mx-auto text-center">
                                    <a href="{{ url('social') }}" class="btn btn-outline btn-lg py-2 px-4 border border-dark" style="font-size: 20px;">SABER MÁS <i class="carga fa fa-spinner fa-spin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col py-5">
                            <div class="row py-5">
                                <div class="col-md-9 col-lg-12 text-center mx-auto">
                                    <img src="{{ asset('img/design/TKSHome_76.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <form action="{{ url('/') }}" method="POST">
                                <div class="row">
                                    <div class="col-md-9 mx-auto">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 py-1">
                                                <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Nombre">
                                            </div>
                                            <div class="col-sm-12 col-md-4 py-1">
                                                <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Correo">
                                            </div>
                                            <div class="col-sm-12 col-md-4 py-1">
                                                <input type="text" class="form-control formu2 border border-dark py-2" style="background-color: #F7F0EB; font-size: 24px;" placeholder="Whatsapp">
                                            </div>
                                        </div>
                                        <div class="row py-1">
                                            <div class="col">
                                                <textarea class="form-control border border-dark" name="" id="" cols="30" rows="10" style="height: 100px;  font-size: 24px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-4 col-lg-3 mx-auto text-center">
                                                <!-- <input type="submit" class="form-control btn border border-dark py-2" value="ENVIAR" style="font-size: 30px;"> -->
                                                <button type="submit" class="form-control btn border border-dark py-2" style="font-size: 20px;">
                                                    SABER MAS <i class="carga fa fa-spinner fa-spin"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('jqueryExtra')

<script>
  $(document).ready(function() {
    $('#slider_pri').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('#carrusel_logos').slick({
      dots: true,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
   });
</script>
@endsection

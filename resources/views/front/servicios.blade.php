@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
    
@endsection
@section('styleExtras')

@endsection
@section('content')

<div class="container-fluid"  style="background-color: black;">
	<div class="row" style="padding-top: 150px; padding-bottom: 100px;">
		<div class="col-md-1"></div>
		<div class="col-md-4 col-12" style="text-align: center">
			<img class="ajust" src="{{asset("img/photos/seccions/".$elementos[1]->imagen)}}">
		</div>
		<div class="col-md-5 col-12">
			<h2 class="texto" style="font-size: 50px; font-weight: lighter; color: white;">{!!$elementos[2]->texto!!}</h2>
			<div class="texto" style="font-weight: lighter; color: white;">{!!$elementos[0]->texto!!}</div>
		</div>
		<div class="col-bg-2"></div>
	</div>
</div>

<div class="container" style="margin-top: -70px;">
	<div id="carrusel2">
		@foreach($productos as $item)
		<div class="col-12 col-md-3" style="margin: 0; padding: 0;">
			<div class="card" id="cards" style="border: none;">
			  <img src="{{asset("/img/photos/productos/$item->foto")}}" class="card-img-top" alt="img" style="max-height: 306px">
			  <div class="card-body">
				<h5 style="font-weight: bold;">{{$item->nombre}}</h5>
				<img src="{{asset("img/design/vector_1.png")}}"><br>
			  </div>
			</div>
		  </div>
		@endforeach
	</div>
</div>

<div class="container py-5">
  	<div class="accordion accordion-flush" id="accordionFlushExample">
		@foreach($todos as $item)
		@if(!empty($item->categoria))
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingOne">
					<button class="accordion-button collapsed" style="font-weight: bolder; font-size: 90%;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$item->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
						{{$item->nombre}}
					</button>
				</h2>
				<div id="flush-collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							@foreach($todasCat as $ta)
							@if($ta->id_categoria == $item->categoria)
							<div class="accordion-body" style="border-bottom: black"><a class="acordeon" href="{{route('front.soluciones',$ta->id)}}">{{$ta->nombre}}</a></div>
							@endif
							@endforeach
				</div>
			</div>
			@endif
		@endforeach
	</div>
</div>

@endsection

@section('jqueryExtra')

<script>
  $(document).ready(function() {
    $('#carrusel2').slick({
      dots: true,
      infinite: true,
      slidesToShow: 4,
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




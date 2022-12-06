@extends('layouts.front')

@section('title', 'Nosotros')
@section('styleExtras')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}
@endsection

@section('content')



@endsection

@section('jqueryExtra')

<script>
  $(document).ready(function() {
    $('#carrusel_logos').slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
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

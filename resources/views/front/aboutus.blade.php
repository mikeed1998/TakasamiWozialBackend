@extends('layouts.front')

@section('title')
    {{ 'Nosotros' }}
@endsection

@section('styleExtras')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}
@endsection

@section('content')

<div class="container-fluid px-5">
    <div class="row" style="background-color: #F7F0EB;">
        <div class="col py-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-7 px-5">
                    <div class="row mt-5 py-5">
                        <div class="col">
                            <img src="{{ asset('img/design/Nosotros_03_01.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: justify;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi doloribus blanditiis illum veniam deleniti mollitia sunt doloremque commodi adipisci! A reprehenderit nemo provident unde excepturi nobis qui minus laborum nam! Quo doloremque quaerat tempore, neque quibusdam ullam velit placeat pariatur debitis dolorum natus iusto exercitationem quisquam eius aliquam, dolore earum voluptate deserunt! Praesentium, suscipit dignissimos reiciendis iusto porro harum beatae expedita veritatis eaque, vel esse similique ipsa sit magni a ducimus laudantium officia provident recusandae hic. Quia adipisci reprehenderit necessitatibus inventore sint. Ipsam aliquam a unde? Doloribus id facilis hic mollitia. Quasi soluta quibusdam ab ipsum minima suscipit nisi optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ut maxime neque quas quaerat similique, sapiente odit ad quisquam voluptatibus, ex necessitatibus saepe atque nulla maiores dolor aliquid provident. Dolorum, est rerum vitae exercitationem beatae nulla nemo quas, omnis modi sunt sed cumque consequuntur alias voluptatibus a quidem consectetur quam iste eaque fugiat! Ut totam dolores recusandae. Officia enim animi nam odit ea rerum quae voluptatum quod tenetur laborum quaerat temporibus laboriosam itaque repudiandae debitis quam suscipit accusantium, asperiores libero doloremque? Iusto, reprehenderit. Facere consequuntur earum vero magnam optio ducimus cupiditate distinctio aspernatur similique, perspiciatis veniam! Asperiores sequi dignissimos praesentium.</p>    
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laboriosam laborum dicta, eius veniam vitae repellendus ullam quisquam dolor. Commodi, sequi fugit. Error quo numquam ab modi cumque, ea ullam pariatur recusandae, laboriosam similique beatae quam? Corrupti odio reiciendis odit aut quidem dicta sint placeat at iusto enim modi rem repellat aliquid animi aliquam facere quod nulla et perspiciatis ipsa magni, quos sapiente sunt. Corrupti tempora laudantium recusandae quisquam labore quidem. Debitis, labore eligendi consectetur accusantium quis impedit nobis? Reiciendis iusto accusamus magni incidunt aperiam laudantium facere, natus ipsum nesciunt nam! Accusamus ducimus omnis inventore vel repellat non asperiores? Enim.</p>
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
    <div class="row py-5">
        <div class="col-md-4 mt-5 py-5">
            <div class="row mt-5">
                <div class="col-md-9 mt-5 text-start mx-auto">
                    <br>
                    <img src="{{ asset('img/design/Nosotros_07_01.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-9 text-start mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tempora dolorum facilis blanditiis ratione aliquam soluta nesciunt quod itaque in.
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-9 text-start mx-auto">
                    <hr style="border: 5px solid #F7F0EB;">
                </div>
            </div>
        </div>
        <div class="col-md-8" style="background-color: #F7F0EB;">
            <div class="row">
                <div class="col-md-9 text-center mx-auto">
                    <div class="row">
                        <div class="col-md-6 py-5 text-center mx-auto">
                            <div class="card border-0" style="background-color: #F7F0EB;">
                                <div class="text-center">
                                    <img src="{{ asset('img/design/PROYECTOS_03.png') }}" class="img-fluid rounded-circle w-50" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Rosario Mendoza</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h6>CEO & CREATIVE DIRECTOR</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: justify;">
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque exercitationem minus itaque similique natus iure voluptate? Ab iste beatae commodi optio inventore, consequatur perferendis temporibus maxime, veritatis aperiam autem.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-start">
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-whatsapp fa-lg px-2"></i>
                                            </a>
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-facebook-f fa-lg px-2"></i>
                                            </a>
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-instagram fa-lg px-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-5 text-center mx-auto">
                            <div class="card border-0" style="background-color: #F7F0EB;">
                                <div class="text-center">
                                    <img src="{{ asset('img/design/PROYECTOS_03.png') }}" class="img-fluid rounded-circle w-50" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Rosario Mendoza</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h6>CEO & CREATIVE DIRECTOR</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: justify;">
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque exercitationem minus itaque similique natus iure voluptate? Ab iste beatae commodi optio inventore, consequatur perferendis temporibus maxime, veritatis aperiam autem.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-start">
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-whatsapp fa-lg px-2"></i>
                                            </a>
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-facebook-f fa-lg px-2"></i>
                                            </a>
                                            <a href="#" class="text-dark" style="text-decoration: none;">
                                                <i class="fa-brands fa-instagram fa-lg px-2"></i>
                                            </a>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4 mt-5 py-5">
            <div class="row mt-5">
                <div class="col-md-9 mt-5 text-start mx-auto">
                    <img src="{{ asset('img/design/Nosotros_14_01.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-9 text-start mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis architecto doloribus recusandae? Enim deserunt voluptatibus facilis aliquid unde voluptate.
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-9 text-start mx-auto">
                    <hr style="border: 5px solid #F7F0EB;">
                </div>
            </div>
        </div>
        <div class="col-md-8 px-0">
            <img src="{{ asset('img/design/Nosotros_11.png') }}" class="img-fluid w-100" alt="" style="background-size: cover;">
        </div>
    </div>
</div>

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

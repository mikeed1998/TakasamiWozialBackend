@extends('layouts.front')

@section('title')
    {{ 'Proyectos' }}
@endsection

@section('cssExtras')
@endsection
@section('styleExtras')
@endsection

@section('content')


    <div class="container-fluid" style="background: none !important;">
        <div class="row position-relative">
            <div class="col-12 text-end position-absolute top-0 start-50 translate-middle-x z-3">
                <div class="col-6 mt-4 text-start position-relative bg-warning" style="max-height: 633px; overflow: scroll;" id="categorias_base">
                    @foreach ($proyectos as $pro)
                        <div class="row mt-5">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-12">
                                * {{ $pro->categoria }}
                            </div>
                        </div>
                        <div class="row py-3">
                            @foreach ($proyectos_d as $pd)
                                <div class="col">
                                    @if ( $pd->categoria_n  == $pro->categoria )
                                        {{ $pd->titulo }}
                                    @endif
                                </div>
                             @endforeach
                        </div>
                    @endforeach
                <div class="col-6"></div>
            </div>
            <div class="col-12 text-end position-absolute top-100 start-50 translate-middle-x z-1">
                <div id="auxiliar">
                      
                    @foreach ($proyectos_d as $pd)
                    <div> 
                        <div class="row position-relative">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="d-flex flex-row justify-content-start align-items-end" style="background-image: url('{{ asset('img2/photos/proyectos/'.$pd->imagen) }}'); background-size: 100% auto; background-repeat: no-repeat;">   
                                    <div class="auxsmall"><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                    <div class="auxmed"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                    <div class="auxsuper"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                    <div class="d-flex flex-column sub-img align-items-center justify-content-center border border-dark">
                                        <img src="{{ asset('img2/photos/proyectos/logos/'.$pd->logo) }}" class="img-fluid" alt="" style="background-size: 50% auto; background-repeat: no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-start">
                                <h1>{{ $pd->titulo }}</h1>
                                <p>{{ $pd->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row px-5">
            <div class="col py-5">
                <div class="row py-5">
                    <div class="col text-center">
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


    {{-- <div class="container-fluid px-5">
        <div class="row position-relative">
            <div class="col-12 position-absolute px-0">
                <div class="row px-3">
                    <div class="col-md-4 px-0">
                        <div class="row">
                            <div class="col">
                                <div class="auxiliar-responsive"><br><br><br><br></div>
                                    <div class="row py-5" style="background-color: #F7F0EB;">
                                        <div class="col-md-4 col-lg-12 py-5 px-5">
                                            @foreach ($proyectos as $pro)
                                                <div class="row mt-5">
                                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-12">
                                                        * {{ $pro->categoria }}
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    @foreach ($proyectos_d as $pd)
                                                    <div class="col">
                                                        @if ( $pd->categoria_n  == $pro->categoria )
                                                            {{ $pd->titulo }}
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                                <div class="col-md-8 px-0">
                                    <div id="carrusel" class="">
                                        @foreach ($proyectos_d as $pd)
                                            <div class="d-flex flex-row justify-content-start align-items-end" style="background-image: url('{{ asset('img2/photos/proyectos/'.$pd->imagen) }}'); background-size: 100% auto; background-repeat: no-repeat;">   
                                                <div class="auxsmall"><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                                <div class="auxmed"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                                <div class="auxsuper"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                                                <div class="d-flex flex-column sub-img align-items-center justify-content-center border border-dark">
                                                    <img src="{{ asset('img2/photos/proyectos/logos/'.$pd->logo) }}" class="img-fluid" alt="" style="background-size: 50% auto; background-repeat: no-repeat;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row px-5">
            <div class="col py-1" style="background-color: #F7F0EB;">
                <div class="row mt-5">
                    <div class="col-md-4 text-start">
                        <img src="{{ asset('img/design/PROYECTOS_18.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <hr style="border: 3px solid black;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci perferendis harum omnis aut dignissimos itaque tempore ad totam possimus error laudantium maiores velit voluptate laborum fugiat, ratione placeat inventore quam ipsa reiciendis? Expedita nemo delectus earum obcaecati sunt fugit similique, deleniti numquam ut voluptatibus saepe a natus autem, sapiente nihil minus quas sequi illo beatae ea aut. Perspiciatis laboriosam id rerum pariatur aspernatur ratione illo accusantium earum sit, ut omnis dolorum facilis doloribus neque hic ex iure itaque alias quis error fugit aut atque quasi dignissimos. Culpa rem sequi placeat saepe reiciendis itaque earum illum necessitatibus omnis quam animi dolorum odio deserunt, eum nesciunt nulla officia. Nemo amet magnam modi expedita a ea impedit! Totam sapiente maiores sint, harum nesciunt repudiandae corporis nulla accusantium soluta asperiores culpa. Iusto libero ipsam necessitatibus impedit tempora architecto blanditiis sequi quia nam? Perferendis enim mollitia iusto pariatur asperiores minima, sed dignissimos facilis delectus a perspiciatis libero velit. Similique pariatur labore, nesciunt aut qui hic earum illum sequi beatae nostrum voluptatem inventore incidunt, exercitationem consectetur eveniet explicabo odio. Ea impedit aliquam obcaecati aperiam incidunt fuga voluptate molestiae, et esse corrupti fugit quaerat ipsa tenetur eveniet commodi expedita iusto quo, quod mollitia repellendus a nisi distinctio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi asperiores modi rem quas id animi voluptatem eligendi cupiditate enim, vel ea architecto, libero, expedita temporibus labore delectus maxime. Consectetur sapiente consequuntur rem recusandae adipisci alias quis quibusdam cumque? Libero facilis mollitia harum, est iusto eligendi explicabo dolorum similique. Repellendus nulla magnam debitis delectus vitae qui accusamus eius pariatur dolor nobis voluptas, nesciunt possimus. Inventore porro rem repellat omnis commodi temporibus est doloribus nostrum corporis aliquid ipsum autem, eaque sequi accusantium! Voluptas possimus veritatis rerum a eius commodi. Voluptates velit facilis harum perferendis mollitia dicta adipisci facere earum accusantium eligendi sunt sit laudantium, debitis quae maiores unde voluptate. Eligendi repellendus delectus, quas, aspernatur minima et magnam inventore dolore odio reprehenderit exercitationem deleniti aliquid? Eaque facere dolores, animi at mollitia, reiciendis deserunt corporis fugiat dolor id molestiae tempore eos! Quo porro voluptatibus minima aperiam laudantium quia excepturi, aut voluptatum eaque velit? Porro!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="col py-5">
                <div class="row py-5">
                    <div class="col text-center">
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
    </div> --}}

@endsection

@section('jsLibExtras2')
<script>     
    $('#slider, #dos, #auxiliar').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '#mover',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    // dots: true
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
@endsection

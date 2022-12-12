@extends('layouts.front')

@section('title')
    {{ 'Social' }}
@endsection

@section('cssExtras')
@endsection

@section('styleExtras')
@endsection

@section('content')

<div class="container-fluid px-5">
    <div class="auxiliar-responsive"><br><br></div>
    <div class="row position-relative" style="background-color: #F7F0EB;">
        <div class="col py-5">
            <div class="row mt-5">
                <div class="col mt-5 text-center">
                    <img src="{{ asset('img/design/TKSHome_68.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row py-5">
                <div class="col text-center mx-auto">
                    <img src="{{ asset('img/design/RSOCIAL_03.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-7 text-center mx-auto" style="text-align: justify;">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione esse quam totam corrupti nobis voluptatem perspiciatis consectetur. Nemo, minima quas dignissimos, doloribus quibusdam in ad tempora consequuntur maxime necessitatibus voluptatum? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque velit dignissimos rem deserunt sit accusantium deleniti ratione aperiam! Cupiditate vitae nesciunt nihil possimus laboriosam, placeat alias deleniti amet repellat sit officiis provident! A quidem ratione atque, porro asperiores ipsum repellat qui, quia omnis quas eligendi, illum aspernatur exercitationem at recusandae?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rerum dolores maiores soluta, odio sunt in magnam cupiditate. Quos earum sint dolore repellendus repudiandae quaerat impedit architecto at sed delectus dolorum, voluptas illo id tempore consectetur nemo labore officiis minus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aux2"><br><br><br><br><br><br><br><br><br></div>
            <div class="aux1"><br><br><br><br><br><br><br></div>
            <div class="aux"><br></div>
        </div>
        <div class="col-12 px-5 mt-5 mx-auto position-absolute top-100 start-50 translate-middle">
        <div class="aux"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
            <div class="row mt-5">   
                <div class="mx-auto">
                    <div class="row">
                        <div id="carruselSocial">
                            <div>
                                <div class="card px-3 mt-5 bg-transparent border-0">
                                    <div class="col-sm-12 col-md-12">
                                        <img src="{{ asset('img/design/RSOCIAL_07.png') }}" class="img-fluid w-100" alt="" style="width: 100%; height: 30vw; object-fit: cover;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center mx-auto">
                                                    <p class="display-6">ARTESANOS</p>
                                                </div>
                                            </div>
                                            <div class="row py-0">
                                                <div class="col-md-4 py-0 mx-auto">
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9 mx-auto text-center">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae magnam possimus ullam hic repellat esse iste in cupiditate quibusdam exercitationem.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card px-3 mt-5 bg-transparent border-0">
                                    <div class="col-sm-12 col-md-12">
                                        <img src="{{ asset('img/design/RSOCIAL_09.png') }}" class="img-fluid w-100" alt="" style="width: 100%; height: 30vw; object-fit: cover;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 text-center mx-auto">
                                                    <p class="display-6">CARCELES</p>
                                                </div>
                                            </div>
                                            <div class="row py-0">
                                                <div class="col-md-4 py-0 mx-auto">
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9 mx-auto text-center">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae magnam possimus ullam hic repellat esse iste in cupiditate quibusdam exercitationem.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card px-3 mt-5 bg-transparent border-0">
                                    <div class="col-sm-12">
                                        <img src="{{ asset('img/design/RSOCIAL_09.png') }}" class="img-fluid w-100" alt="" style="width: 100%; height: 30vw; object-fit: cover;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 text-center mx-auto">
                                                    <p class="display-6">CARCELES</p>
                                                </div>
                                            </div>
                                            <div class="row py-0">
                                                <div class="col-md-4 py-0 mx-auto">
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9 mx-auto text-center">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae magnam possimus ullam hic repellat esse iste in cupiditate quibusdam exercitationem.
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
            <div class="row">
                <div class="col-md-3 col-sm-12 py-2 mt-2 mb-5 mx-auto text-center">
                    <button id="btn-slick-social" class="btn btn-outline">
                        <i class="fa-solid fa-circle px-1"></i><i class="fa-solid fa-circle px-1"></i><i class="fa-solid fa-circle px-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="aux1"><br><br><br><br><br><br><br><br><br><br><br></div>
    <div class="aux2"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
</div>

@endsection

@section('jsLibExtras2')
@endsection

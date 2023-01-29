<div class="container-fluid px-5">
    <div class="row">
        <div class="col border border-dark py-1" style="background-color: #F7F0EB;">
            <div class="row">
                <div class="col-md-4 py-5">
                    <div class="row py-2">
                        <div class="col-md-9 mx-auto">
                            <h2 class="display-6">Necesitas Ayuda? Escribenos</h2>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-9 mx-auto">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum unde voluptates cupiditate dolore mollitia.
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-9 mx-auto">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-6 py-1">
                                    <input type="text" class="form-control formu bg-black py-1" style="background-color: black; color: white; font-size: 24px;" placeholder="NOMBRE">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6 py-1">
                                    <input type="text" class="form-control formu bg-black py-1" style="background-color: black; color: white; font-size: 24px;" placeholder="CORREO">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col">
                                    <textarea class="form-control bg-black formu py-1" name="" id="" cols="30" rows="10" style="color: white; height: 50px; background-color: black; font-size: 24px;" placeholder="MENSAJE"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-6 mx-auto text-center">
                                    <input type="submit" class="form-control border border-dark py-1" value="ENVIAR" style="font-size: 24px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border-start border-dark">
                    <div class="row border-bottom border-dark mx-auto">
                        <div class="col-md-11 mx-auto">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-6"><a href="{{ url('nosotros') }}" style="text-decoration: none; color: black;">Nosotros</a></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-6"><a href="{{ url('soluciones') }}" style="text-decoration: none; color: black;">Soluciones</a></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-6"><a href="{{ url('proyectos') }}" style="text-decoration: none; color: black;">Proyectos</a></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-6"><a href="{{ url('contacto') }}" style="text-decoration: none; color: black;">Contacto</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end mt-5">
                                    <div class="row mt-5">
                                        <div class="col-6 mt-5">
                                           
                                        </div>
                                        <div class="col-6">
                                            {!! $data->direccion ?? '' !!}
                                            <br>
                                            {!! $data->destinatario ?? '' !!}
                                            <br>
                                            {!! $data->telefono ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="text-dark" style="text-decoration: none;">aviso de privacidad</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="text-dark" style="text-decoration: none;">preguntas frecuentes</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="text-dark" style="text-decoration: none;">terminos y condiciones</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5 py-0 text-end">
                                    <a href="https://wa.me/{!! $data->whatsapp ?? '' !!}" class="text-dark" style="text-decoration: none;">
                                        <i class="fa-brands fa-whatsapp fa-2xl px-2"></i>
                                    </a>
                                    <a href="{!! $data->facebook ?? '' !!}" class="text-dark" style="text-decoration: none;">
                                        <i class="fa-brands fa-facebook-f fa-2xl px-2"></i>
                                    </a>
                                    <a href="{!! $data->instagram ?? '' !!}" class="text-dark" style="text-decoration: none;">
                                        <i class="fa-brands fa-instagram fa-2xl px-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col text-center">
            <h4>takasami 2022 todos los derechos reservados diseño por Wozial</h4>
        </div>
    </div>
</div>
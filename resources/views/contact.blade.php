@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Dirección:</span> <span class="text-primary">Jr. Tupac Amaru Nro. 131 P.J. Collique 1ra Etapa (Alt. Colegio Peru-Holanda)</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Teléfono:</span> <a href="tel://51934466479" class="text-primary"> +51 934 466 479</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:frigoelectridelperueirl@gmail.com" class="text-primary">frigoelectridelperueirl@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters shadow">
                    <div class="col-md-7">
                        <div class="contact-wrap w-100 p-md-5 p-4" id="contact">
                            <h3 class="mb-4">Contáctanos</h3>
                            <form class="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label" for="name">Apellidos y Nombres:</label>
                                            <input type="text" class="form-control" v-model="name" placeholder="Escribe aquí...">
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label class="label" for="email">Correo electrónico:</label>
                                            <input type="email" class="form-control" v-model="email" placeholder="Escribe aquí...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label" for="phone">Celular:</label>
                                            <input type="number" class="form-control" v-model="phone" placeholder="Escribe aquí...">
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label class="label" for="ruc">Empresa:</label>
                                            <input type="text" class="form-control" v-model="company" placeholder="Escribe aquí...">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="message">Mensaje</label>
                                            <textarea class="form-control" cols="30" rows="4" v-model="message" placeholder="Escribe aquí..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Enviar mensaje" @click.prevent="sendContact" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-stretch">
                        <div class="info-wrap w-100 p-5 img" style="background-image: url({{ asset('assets/images/about-1.jpg') }});"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    
    <script src="js/web/contact.js"></script>

@endsection
@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <div id="service">
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Buscar servicio" v-model="service">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded" {{-- style="background-image: url('{{ asset('assets/images/image_1.jpg') }}'); --}}"></a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a href="/service/detail">2 de septiembre del 2020</a></div>
                                    <div><a href="/service/detail">Admin</a></div>
                                    <div><a href="/service/detail" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="/service/detail">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                    <div class="block-27">
                        <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('scripts')
    
    <script src="{{ asset('js/service.js') }}"></script>

@endsection
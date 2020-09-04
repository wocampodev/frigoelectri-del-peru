@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <div id="service">
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sidebar-box">
                            <form class="search-form">
                                <div class="form-group">
                                    <span class="fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Buscar servicio" v-model="search">
                                    <span>@{{ search }}</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row d-flex">
                    <ul>
                        <li v-for="service in services">
                            <table style="width: 100%;">
                                <tbody>
                                    <td><a :href="'/service-detail/' + service.id">@{{ service.id }}</a></td>
                                    <td><span>@{{ service.name }}</span></td>
                                    <td><span>@{{ service.short_description }}</span></td>
                                </tbody>
                            </table>
                            {{-- <div class="col-md-4 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch">
                                    <a href="#" class="block-20 rounded"></a>
                                    <div class="text p-4">
                                        <div class="meta mb-2">
                                            <div><a href="/service/detail">@{{ service.name }}</a></div>
                                            <div><a href="/service/detail">@{{ service.id }}</a></div>
                                            <div><a href="/service/detail" class="meta-chat"><span class="fa fa-comment"></span>@{{ service.id }}</a></div>
                                        </div>
                                        <h3 class="heading"><a href="/service/detail">@{{ service.short_description }}</a></h3>
                                    </div>
                                </div>
                            </div> --}}
                        </li>
                    </ul>
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
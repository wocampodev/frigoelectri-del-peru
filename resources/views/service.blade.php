@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <section class="ftco-section bg-light">
        <div class="container" id="service">
            <div class="row d-flex">
                @foreach($services as $item)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div style="width: 100%">
                            <div class="blog-entry align-self-stretch">
                                <a href="/servicios/{{ $item->slug }}" class="block-20 rounded" style="background-image: url('/assets/images/services/{{ $item->image }}')"></a>
                                <div class="text p-4">
                                    {{-- <div class="meta mb-2">
                                        <div>{{ $service->name }}</div>
                                    </div> --}}
                                    <h3 class="heading"><a href="/servicios/{{ $item->slug }}">{{ $item->name }}</a></h3>
                                </div>
                            </div>
                        </div> 
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul class="d-flex justify-content-center">
                            {{ $services->links() }}
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate" v-for="service in services">
                    <div>
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20 rounded" style="background-image: url('/assets/images/gallery-1.jpg')"></a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a :href="'/servicios/' + service.slug" v-html="service.name"></a></div>
                                </div>
                                <h3 class="heading"><a :href="'/servicios/' + service.slug" v-html="service.short_description"></a></h3>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li v-if="pagination.current_page > 1">
                                <a href="#" @click.prevent="changePage(pagination.current_page - 1)">&lt;</a>
                            </li>

                            <li v-for="page in pagesNumber" :class="[ page == isActive ? 'active' : '']">
                                <a href="#" @click.prevent="changePage(page)" v-html="page"></a>
                            </li>
                            
                            <li v-if="pagination.current_page < pagination.last_page">
                                <a href="#" @click.prevent="changePage(pagination.current_page + 1)">&gt;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

@endsection

@section('scripts')
    
    {{-- <script src="{{ asset('js/web/service.js') }}"></script> --}}

@endsection
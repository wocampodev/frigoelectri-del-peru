@extends('layout.template')

@section('content')
    
    @include('sections.hero-secondary')

    <section class="ftco-section bg-light">
        <div class="container" id="service">
            <div class="row d-flex">
                <ul style="display: inline-block; list-style: none;">
                    <li v-for="service in services">
                        <table style="width: 100%;">
                            <tbody>
                                <td><a :href="'/servicios/' + service.slug">@{{ service.slug }}</a></td>
                                <td><span>@{{ service.name }}</span></td>
                                <td><span>@{{ service.short_description }}</span></td>
                            </tbody>
                        </table>
                    </li>
                </ul>
                {{-- <ul style="display: inline-block; list-style: none;">
                    <li v-for="service in services">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="#" class="block-20 rounded"></a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div><a :href="'/servicios/' + service.slug" v-html="service.slug"></a></div>
                                        <div><a :href="'/servicios/' + service.slug" v-html="service.name"></a></div>
                                        <div><a :href="'/servicios/' + service.slug" class="meta-chat" v-html="service.name"><span class="fa fa-comment"></span></a></div>
                                    </div>
                                    <h3 class="heading"><a :href="'/servicios/' + service.slug" v-html="service.short_description"></a></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul> --}}
                {{-- <div class="col-md-4 d-flex ftco-animate" v-for="service in services">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20 rounded"></a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a :href="'/servicios/' + service.slug" v-html="service.slug"></a></div>
                                <div><a :href="'/servicios/' + service.slug" v-html="service.name"></a></div>
                                <div><a :href="'/servicios/' + service.slug" class="meta-chat" v-html="service.name"><span class="fa fa-comment"></span></a></div>
                            </div>
                            <h3 class="heading"><a :href="'/servicios/' + service.slug" v-html="service.short_description"></a></h3>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row mt-5" {{-- v-if="isNotSearching" --}}>
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li v-if="pagination.current_page > 1">
                                <a href="#" @click.prevent="changePage(pagination.current_page - 1)">&lt;</a>
                            </li>

                            <li v-for="page in pagesNumber" :class="[ page == isActive ? 'active' : '']">
                                <a href="#" @click.prevent="changePage(page)" v-html="page">
                                    {{-- @{{ page }} --}}
                                </a>
                            </li>
                            
                            <li v-if="pagination.current_page < pagination.last_page">
                                <a href="#" @click.prevent="changePage(pagination.current_page + 1)">&gt;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    
    <script src="{{ asset('js/service.js') }}"></script>

@endsection
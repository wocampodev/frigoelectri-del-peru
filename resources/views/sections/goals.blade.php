<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Ellos confían en nosotros</h2>
            </div>
        </div>
        <div class="row tabulation mt-4 ftco-animate">
            <div class="col-md-4 order-md-last">
                <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                    @foreach ($clients as $item)
                        <li class="nav-item text-left">
                        <a class="nav-link @if ($item->id == 1) active @endif py-4" data-toggle="tab" href="#client-{{ $item->id }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    @foreach ($clients as $item)
                        <div class="tab-pane container p-0 @if ($item->id == 1) active @endif" id="client-{{ $item->id }}">
                            <div class="img img-fluid" 
                                style="background-image: url('assets/images/clients/{{ $item->image }}'); 
                                background-size: 66% 66%;
                                background-repeat: no-repeat;
                                background-position: center center;"></div>
                            <h3><a href="#">{{ $item->name }}</a></h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, doloribus!. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea consequuntur molestias, earum at magni esse?</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

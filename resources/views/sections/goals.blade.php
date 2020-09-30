<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Ellos confían en nosotros</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="autoplay">
                    @foreach ($clients as $item)
                        <div><img src="assets/images/clients/{{ $item->image }}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

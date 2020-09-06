<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p><img src="{{ asset('assets/images/image_1.jpg') }}" alt="" class="img-fluid"></p>
              <h2 class="mb-3">{{ $service->name }}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
                <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
              <div class="sidebar-box ftco-animate">
                <div class="categories">
                  <h3>Servicios Similares</h3>
                  @foreach ($services_random as $item)
                    <li><a href="{{ url('servicios/'.$item->slug) }}"> {{ $item->name }} <span class="fa fa-chevron-right"></span></a></li>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
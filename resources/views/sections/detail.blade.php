<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p><img src="{{ asset('assets/images/image_1.jpg') }}" alt="" class="img-fluid"></p>
              <h2 class="mb-3">{{ $service->name }}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
              <div class="sidebar-box ftco-animate">
                <div class="categories">
                  <h3>Otros Servicios</h3>
                  @foreach ($services_random as $item)
                    <li><a href="{{ url('servicios/'.$item->slug) }}"> {{ $item->name }} <span class="fa fa-chevron-right"></span></a></li>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('../assets/images/bg_3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-12 col-lg-8 half p-3 py-5 pl-lg-5 ftco-animate fadeInUp ftco-animated">
        <h2 class="mb-4 text-center">Solicitar servicio</h2>
        <form action="#" class="appointment">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                    <select name="service" id="service" class="form-control">
                      <option value="{{ $service->id }}" selected>{{ $service->name }}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-user"></span></div>
                  <input type="text" class="form-control" id="names" name="names" placeholder="Apellidos y Nombres">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-paper-plane"></span></div>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-phone"></span></div>
                  <input type="number" class="form-control" id="phone" name="phone" placeholder="Celular">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-calendar"></span></div>
                  <input class="form-control appointment_date" id="date" name="date" placeholder="Fecha">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" id="message" name="message" class="form-control" placeholder="Mensaje"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-4">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
              <p class="d-flex justify-content-center">
                <div 
                style=" height: 50vh;
                background-origin: content-box;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center center; 
                background-image: url('../assets/images/services/{{ $service->image }}');"></div></p>
              <h2 class="mb-3">{{ $service->name }}</h2>
                <p>{{ $service->short_description }}</p>
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
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('../assets/images/bg-inicioservicios.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-12 col-lg-8 half p-3 py-5 pl-lg-5 ftco-animate fadeInUp ftco-animated">
        <h2 class="mb-4 text-center">Solicitar servicio</h2>
        <form id="order" class="appointment">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                    <select v-model="service" class="form-control">
                      <option value="{{ $service->id }}" id="service_id" selected>{{ $service->name }}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-user"></span></div>
                  <input type="text" class="form-control" v-model="name" placeholder="Apellidos y Nombres">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-paper-plane"></span></div>
                  <input type="email" class="form-control" v-model="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-phone"></span></div>
                  <input type="number" class="form-control" v-model="phone" placeholder="Celular">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-calendar"></span></div>
                  <input type="date" class="form-control appointment_date" v-model="date" placeholder="Fecha">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" v-model="message" class="form-control" placeholder="Mensaje"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="submit" value="Enviar mensaje" @click.prevent="sendOrder" class="btn btn-primary py-3 px-4">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 <section class="sec3">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">Get your free quote now</h2>
          <div class="content-text">
            <p>Fill out this form, and we’ll get back to you in 45 minutes or less with your customized quote.</p>
          </div>
        </div>
      </div>
      <form method="post" action="{{ url('/get-free-quote/') }}" >
        @csrf
      <div class="row text-center">

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
              <label for="exampleInputEmail1">Quantity...</label>
              <input type="number" name="quantity" class="form-control" id="exampleInputQuantity" aria-describedby="emailHelp" required="required">
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <?php
            $services = App\Service::where('publication_status',1)->orderBy('service_id','DESC')->get();
          ?>
            <div class="form-group">
              <label for="exampleFormControlSelect1">select a Service *</label>
              <select class="form-control" id="exampleFormControlSelect1" name="service_id" required="required">
                 @foreach($services as $service)
                <option value="{{ $service->service_id }}">{{ $service->title }}</option>
                 @endforeach
              </select>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required">
            </div>
        </div>
        <div class="col">
        <button class="btn btn-warning get" type="submit">GET YOU QUOTE</button>
      </div>
    </div>
    </form>
    </div>
    </section>
 <section class="sec6">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title text-center">Why clipping path in Bangladesh ?</h2>
        </div>
      </div>
      <?php 
        $clpngpbd = App\Clpngpbd::first();
      ?>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="grid-item-wrapper text-center mt-4rem">
            <div class="icon-wrapper">
              <img class="svg-img" src="../assets/admin/images/cpbd/{{ $clpngpbd->qlty_img }}" alt="">
            </div>
            <h3>{{ $clpngpbd->qlty_title }}</h3>
            <p style="text-align: justify;">{{ $clpngpbd->qlty_des }}</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="grid-item-wrapper text-center">
            <div class="icon-wrapper">
              <img class="svg-img" src="../assets/admin/images/cpbd/{{ $clpngpbd->price_img }}" alt="">
            </div>
            <h3>{{ $clpngpbd->price_title }}</h3>
            <p style="text-align: justify;">{{ $clpngpbd->price_des }}</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="grid-item-wrapper text-center">
            <div class="icon-wrapper">
              <img class="svg-img" src="../assets/admin/images/cpbd/{{ $clpngpbd->time_img }}" alt="">
            </div>
            <h3>{{ $clpngpbd->time_title }}</h3>
            <p style="text-align: justify;">{{ $clpngpbd->time_des }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
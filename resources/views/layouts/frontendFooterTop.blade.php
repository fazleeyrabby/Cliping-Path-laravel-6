<div class="page-width">
    <div class="content">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="content-header">
            <h2 class="content-title">Receive free ecommerce <br> and product photography tips..</h2>
          </div>
        <form action="">
          <input type="text" placeholder="Enter your email...">
          <button type="button" class="btn btn-primary">Primary</button>
        </form>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="content-header">
            <h2 class="content-title">Tags:</h2>
          </div>
          <?php 
            $taqs = App\Taqs::first();
          ?>
          <div class="popular-tags">
            <ul class="tags">
                <li><a href="">{{ $taqs->taqs_one }}</a></li>
                <li><a href="">{{ $taqs->taqs_two }}</a></li>
                <li><a href="">{{ $taqs->taqs_three }}</a></li>
                <li><a href="">{{ $taqs->taqs_four }}</a></li>
                <li><a href="">{{ $taqs->taqs_five }}</a></li>
                <li><a href="">{{ $taqs->taqs_six }}</a></li>
                <li><a href="">{{ $taqs->taqs_seven }}</a></li>
                <li><a href="">{{ $taqs->taqs_eight }}</a></li>
                <li><a href="">{{ $taqs->taqs_nine }}</a></li>
                <li><a href="">{{ $taqs->taqs_ten }}</a></li>
                <li><a href="">{{ $taqs->taqs_eleven }}</a></li>
                <li><a href="">{{ $taqs->taqs_twelve}}</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
  </div>

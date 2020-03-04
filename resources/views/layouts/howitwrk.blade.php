<section class="sec2">
      <div class="page-width">
        <div class="content">
          <div class="content-header">
            <h2 class="content-title">How it works ?</h2>
          </div>
          <?php
            $howitwrk = App\Howitwork::first();
            $count = 1; 
          ?>
          <div class="grid">
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->fb_img }}" alt="">
              </div>
              <p><strong>1.</strong>{{ $howitwrk->fb_title }}</p>
            </div>
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->desk_img }}" alt="">
              </div>
              <p><strong>2.</strong>{{ $howitwrk->desk_title }}</p>
            </div>
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->bnf_img }}" alt="">
              </div>
              <p><strong>3.</strong>{{ $howitwrk->bnf_title }}</p>
            </div>
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->mail_img }}" alt="">
              </div>
              <p><strong>4.</strong>{{ $howitwrk->mail_title }}</p>
            </div>
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->unknown_img }}" alt="">
              </div>
              <p><strong>5.</strong>{{ $howitwrk->unknown_title }}</p>
            </div>
            <div class="grid-item-wrapper">
              <div class="icon-wrapper">
                <img class="svg-img" src="/assets/admin/howitwork/{{ $howitwrk->time_img }}" alt="">
              </div>
              <p><strong>6.</strong>{{ $howitwrk->time_title }}</p>
            </div>
          </div>
        </div>
      </div>
  </section>
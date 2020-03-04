@extends('layouts.frontendLayout')
@section('title','')
@section('content')
	 <section class="sec8 text-center">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">Fast, high-quality and affordable image-editing <br> services for ecommerce and product photography </h2>
        </div>
        <?php 
          $fsthqaies = App\Fsthqaie::orderBy('id','DESC')->get();
        ?>
        <div class="row">
          @foreach($fsthqaies as $fsthqaie)
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="box">
            <h2><a href="">{!! $fsthqaie->category !!}</a></h2>
            <p style="text-align: justify;">{!! $fsthqaie->description !!}</p>
          </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="box">
            <img src="{{ asset('/assets/admin/images/fsthqaie/') }}/{{ $fsthqaie->image }}" 
            alt="">
          </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section><hr>
@endsection
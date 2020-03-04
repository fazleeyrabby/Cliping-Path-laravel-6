@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
  $privacypolicy = App\Privacypolicy::first();
?>
<div class="page-header">
	<div class="page-width">
	    <h1 class="page-title">{{ $privacypolicy->title }} </h1>
	</div>
</div>
<section class="clipping-path-service-body">
  <div class="page-width">
    <div class="content">
        <p>{!! $privacypolicy->description !!}</p>
    </div>
  </div>
</section>
@endsection
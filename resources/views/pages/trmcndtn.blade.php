@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
  $trmcndtn = App\Termcondition::first();
?>
<div class="page-header">
	<div class="page-width">
	    <h1 class="page-title">{{ $trmcndtn->title }} </h1>
	</div>
</div>
<section class="clipping-path-service-body">
  <div class="page-width">
    <div class="content">
        <p>{!! $trmcndtn->description !!}</p>
    </div>
  </div>
</section>
@endsection
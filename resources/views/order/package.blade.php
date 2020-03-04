@extends('layouts.clientApp')
@section('title', 'Client-Dashboard')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>  All Package</h1>
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach($packages as $package)
            <div class="col-md-4" style="padding: 5px;">
                <div class="card">
                    <div class="card-header"><strong>{{ $package->pkg_name }}</strong></div>
                    <div class="card-body">
                        <p>{!! substr(strip_tags($package->description),0,500)!!}</p>
                        <strong class="pul-right">Price : {{ $package->amount }}</strong>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('home/packages/booking',$package->pkg_id)}}" class='btn btn-primary'title='Book now'>Book now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
@extends('layouts.frontendLayout')
@section('title','')
@section('content')
    
  <div class="register-form">
      <div class="page-width">
          <div class="content">
           <form method="POST" action="{{ route('custom.reg') }}">
            @csrf
               

                <div class="form-group">
                <label for="Name"> Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="exampleInputPassword1" placeholder="Confirm Password">
                  </div>

                <button type="submit" class="btn btn-primary">REGISTER NOW</button>
              </form>
          </div>
      </div>
  </div>
   <hr>
@endsection
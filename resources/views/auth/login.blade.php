@extends('layouts.applogin')

@section('tittle','Login')

@section('content')

<div class="login-box text-center">
  <!-- /.login-logo -->
  <div class="card card-outline text-center">
    <div class="card-header text-center bg-white" >
      <a href="{{ url('/home') }}" class="h1">
        <img src="backend/dist/img/module_table_bottom.png" style="width: 60%; height: auto;">
        <h2 class="login-box-msg" style="font-weight: bold;">El estanco de nando</h2>
      </a>
    </div>
    <div class="card-body" style="background-color: #FBF9F1;">
      <p class="login-box-msg" style="font-weight: bold;">Sign in para iniciar seseión</p>

      <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="bg-warning bg-opacity-50 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="usuario@example.com">
          <div class="input-group-append">
            <div class="input-group-text bg-warning">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="bg-warning bg-opacity-50 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">
          <div class="input-group-append">
            <div class="input-group-text bg-warning">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <br>

        <div class="text-center">
          <div class="row text-center">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-light btn-block bg-success" style="background-color: #92C7CF; color:white">Sign In</button>
            </div>

            <div class="col-4">
              <a href="{{route('register')}}" class="btn btn-light btn-block bg-danger" style="background-color: #92C7CF; color:white">Register</a>
            </div>
            <!-- /.col -->
          </div>
        </div>

        
      </form>
      <br>
        <div class="row; text-center">
            <div class="col-12">
            <p class="mb-1">
                @if (Route::has('password.request'))
                <a href="{{route('password.request')}}" style="color: black; font-weight: bold;" >Did you forget your password?</a>
                @endif
            </p>
            </div>
        </div>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

@endsection
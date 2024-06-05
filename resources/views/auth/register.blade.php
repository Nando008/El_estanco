@extends('layouts.applogin')

@section('content')

<div class="register-box bg-dark.bg-gradient text-center " >
  <div class="card card-outline">
    <div class="card-header text-center bg-white">
      <a href="#">
      <img src="backend/dist/img/module_table_bottom.png" style="width: 40%; height: auto;">
      </a>
      <p style="font-weight: bold;" class="text-xl">El estanco de nando</p>
    </div>

    <div class="card-body bg-white">
      <p class="login-box-msg" style="font-weight: bold;">Registrate</p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3 ">
          <input id="name" type="text" class="bg-warning bg-opacity-50 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text bg-warning">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" class="bg-primary bg-opacity-50 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text bg-primary">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="bg-danger bg-opacity-50 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text bg-danger">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class=" bg-danger bg-opacity-50 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text bg-danger">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- /.col -->
          <div class="col-4 text-center">
            <button type="submit" class="btn btn-light btn-block" style="background-color: green; color:white">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">

      </div>

      <a href="login" class="text-center" style="color: black;">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>




@endsection
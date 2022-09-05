@extends('layouts.app') 
@section('content')

<div class="register-box">
 

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="input-group mb-3">
            <label for="name" value="{{ __('Name') }}"></label>
          <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" placeholder="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <label for="email" value="{{ __('Email') }}"></label>
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="password" value="{{ __('Password') }}"></label>
          <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
          <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
         
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="{{ route('login') }}" class="text-center">{{ __('Already registered?') }}</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>




@endsection

       





   


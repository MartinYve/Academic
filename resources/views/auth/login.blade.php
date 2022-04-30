@extends('layouts.ap_frontlogin')

@section('content')

<div class="content">
    <div class="container">
      <div class="row">
          <div class="col-md-1"></div>
        <div class="col-md-5">
          <img src="{{('log/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-5 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h2>Se connecter</h2>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
            </div>
            <form method="POST" action="{{ route('login') }}">
            @csrf

              <div class="form-group first">
                <label for="email">{{ __('E-Mail') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">{{ __('Mot de passe')  }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0" for="remember" ><span class="caption">{{__('Se souvenir de moi')  }}</span>
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                    <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Mot de passe oublié</a></span> 
                @endif
              </div>

              <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
@endsection



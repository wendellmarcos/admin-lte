@extends('layouts.auth')

@section('body-class', 'Register') <!-- Definindo a classe do body dinamicamente -->

@section('content')
  <div class="card-body register-card-body">
    <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header">
      <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
        <h1 class="mb-0"><b>Grupo</b>TOTAL</h1>
      </a>
      </div>
      <div class="card-body register-card-body">
      <p class="register-box-msg">Register a new membership</p>
      <form action="{{ route('register') }}" method="post">
        @csrf

        <!-- Full Name Field -->
        <div class="input-group mb-1">
        <div class="form-floating">
          <input id="registerFullName" name="name" type="text"
          class="form-control @error('name') is-invalid @enderror" placeholder="" value="{{ old('name') }}" />
          <label for="registerFullName">Full Name</label>
          @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>
        <div class="input-group-text"><span class="bi bi-person"></span></div>
        </div>

        <!-- Email Field -->
        <div class="input-group mb-1">
        <div class="form-floating">
          <input id="registerEmail" name="email" type="email"
          class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{ old('email') }}" />
          <label for="registerEmail">Email</label>
          @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        </div>

        <!-- Password Field -->
        <div class="input-group mb-1">
        <div class="form-floating">
          <input id="registerPassword" name="password" type="password"
          class="form-control @error('password') is-invalid @enderror" placeholder="" />
          <label for="registerPassword">Password</label>
          @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>

        <!-- Password Confirmation Field -->
        <div class="input-group mb-1">
        <div class="form-floating">
          <input id="registerPasswordConfirmation" name="password_confirmation" type="password"
          class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="" />
          <label for="registerPasswordConfirmation">Password Confirmation</label>
          @error('password_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>

        <!-- Terms and Submit Button -->
        <div class="row">
        <div class="col-8 d-inline-flex align-items-center">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">
            I agree to the <a href="#">terms</a>
          </label>
          </div>
        </div>
        <div class="col-4">
          <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </div>
        </div>
      </form>

      <p class="mb-0">
        <a href="login.html" class="link-primary text-center">I already have a membership</a>
      </p>
      </div>
    </div>
    </div>
  </div>
@endsection
@extends('layouts.auth')

@section('body-class', 'Register') <!-- Definindo a classe do body dinamicamente -->

@section('content')
    <div class="card-body register-card-body">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <a href="{{ route('login') }}"
                        class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                        <h1 class="mb-0"><b>Grupo</b>TOTAL</h1>
                    </a>
                </div>
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Reset Password</p>

                   
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token ?? old('token') }}">

                        <!-- Full Name Field -->
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input id="email" name="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" placeholder=""
                                    value="{{ $token ?? old('token') }}" />
                                <label for="email">EMAIL</label>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>



                        <!-- Password Field -->
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input id="registerPassword" name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="" />
                                <label for="registerPassword">NEW PASSWORD</label>
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
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="" />
                                <label for="registerPasswordConfirmation">CONFIRM NEW PASSWORD</label>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>

                        <!-- Terms and Submit Button -->
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                                </div>
                            </div>
                        </div>

                    </form>

                    <p class="mb-0">
                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <a href="login.html" class="link-primary text-center">I already have a membership</a>
                        </div>
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
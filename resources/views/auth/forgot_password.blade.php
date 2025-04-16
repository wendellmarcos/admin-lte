@extends('layouts.auth')

@section('body-class', 'login-page')

<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <a href="/" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                <h1 class="mb-0"><b>GRUPO</b>TOTAL</h1>
            </a>
        </div>
        <div class="card-body login-card-body">
            <p class="login-box-msg">Please enter your email address</p>

            
                @session('status')
                    <div class="alert alert-success" role="alert">
                        {{$value}}
                    </div>
                @endsession
            
                    
            <form action="{{ route('password.email') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <div class="form-floating flex-grow-1">
                        <input id="loginEmail" name="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                            value="{{ old('email') }}" />
                        <label for="loginEmail">Email</label>
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary w-100">Send me a link</button>
                </div>

            </form>

            <div class="text-center">
                <p><a href="{{ route('login') }}">Back to login</a></p>
                <p><a href="{{ route('register') }}">Register a new membership</a></p>
            </div>

        </div>

    </div>
    <!-- /.login-card-body -->
</div>
</div>
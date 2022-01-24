@extends('layouts.nav')
@section('content')
<div class="login-section">
    <div class="layer"></div>
    <div class="container">
        <div class="top-section">
            <h1 class="page-title">Login</h1>
        </div>
        <div class="left-section">
            <img src="./images/logo.png" alt="">

        </div>
        <div class="right-section">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-user-circle"></i>
                        </div>

                        <input type="text" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="message">
                        @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="message">
                        @error('password')
                        <span class="" role="">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn-login">Login</button>
                </div>
                <div class="form-row">
                    <span>Do not have an account? <a href="{{route('register')}}">Click here</a> </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection